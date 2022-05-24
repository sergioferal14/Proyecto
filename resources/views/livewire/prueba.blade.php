<div>
    <f:view
        xmlns="http://www.w3.org/1999/xhtml"
        xmlns:h="http://xmlns.jcp.org/jsf/html"
        xmlns:ui="http://xmlns.jcp.org/jsf/facelets"
        xmlns:f="http://xmlns.jcp.org/jsf/core"
        xmlns:p="http://primefaces.org/ui"
        xmlns:r="http://realtracksystems.com/ui" xmlns:c="http://java.sun.com/jsp/jstl/core">
    <ui:composition template="#{login.type}/templates/normal/layout.xhtml">
        <ui:define name="content">

            <p:confirmDialog global="true" showEffect="fade" hideEffect="fade">
                <p:commandButton value="#{msg['yes']}" styleClass="ui-confirmdialog-yes" type="button" icon="fa fa-check"/>
                <p:commandButton value="#{msg['no']}" styleClass="ui-confirmdialog-no" type="button" icon="fa fa-times"/>
            </p:confirmDialog>

            <f:metadata>
                <f:viewParam name="id" value="#{membersAdmin.load}" converter="ID"/>
            </f:metadata>

            <c:set var="user" value="#{profile.user}" />

            <h:form id="members" enctype="multipart/form-data">

                <r:card smCols="12" mdCols="4"  id="list" styleClass="PosRelative PaddingRight" styleClassCard="NoPadding">

                    <p:commandLink action="#{membersAdmin.createNew()}" update=":members"
                                   onstart="$('.loadingWidgetFunnel').show()"
                                   oncomplete="$('.loadingWidgetFunnel').hide(); showSelected()">
                        <i class="fa fa-plus phone-add-selectable" style="color: white"> </i>
                    </p:commandLink>

                    <button id="menu-members" class="mdl-button mdl-js-button mdl-button--icon White" onclick="return false"
                            style="position: absolute; top: 20px; right: 20px">
                        <i class="material-icons" style="color: white">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-members">
                        <li class="mdl-menu__item" style="height: auto">

                            Order
                            <p:selectOneRadio value="#{membersAdmin.userList.defaultOrder}"  layout="grid" columns="1" >
                                <f:selectItem itemValue="name" itemLabel="Name" />
                                <f:selectItem itemValue="center" itemLabel="Team" />
                                <f:selectItem itemValue="position" itemLabel="Position" />
                                <p:ajax event="change" update="list" />
                            </p:selectOneRadio>

                        </li>

                        <li  class="mdl-menu__item" >
                            <p:selectBooleanCheckbox value="#{membersAdmin.archived}">
                                <p:ajax event="change" update="list" />
                            </p:selectBooleanCheckbox>

                            <p:outputLabel value="#{msg['archiveds']}" />
                        </li>

                            <li class="mdl-menu__item">
                                <p:selectBooleanCheckbox value="#{membersAdmin.shared}">
                                    <p:ajax event="change" update="list" />
                                </p:selectBooleanCheckbox>

                                <p:outputLabel value="Shared" />
                            </li>
                    </ul>

                    <p:dataTable value="#{membersAdmin.userList}" var="m" rows="#{utils.tables.rows}" widgetVar="members"
                                 rowsPerPageTemplate="#{utils.tables.rowsPages}"
                                 lazy="true" paginator="true" paginatorAlwaysVisible="#{utils.tables.alwaysPaginator}"
                                 paginatorTemplate="#{utils.tables.template}" selectionMode="single" paginatorPosition="top">

                        <f:facet name="header">
                            Players List
                        </f:facet>

                        <p:ajax event="rowSelect" listener="#{membersCenter.selected}"
                                onstart="$('.loadingWidgetFunnel').show()"
                                oncomplete="$('.loadingWidgetFunnel').hide(); showSelected()"
                                update=":members:member"/>


                        <p:column filterBy="#{m.username} #{m.name}">
                            <f:facet name="filter">
                                <p:inputText styleClass="box100w" placeholder="Search" autocomplete="false" onkeyup="PF('members').filter()"/>
                            </f:facet>

                            <div style="display: flex; align-items: center">
                                <p:graphicImage styleClass="MarRight10 center-#{m.id} shadow-box ui-shadow-1 DataTableAvatar" value="#{m.avatar}"
                                                style="background-color: white !important;
                                                border-right: none !important;
                                                border-top: none !important;
                                                border-bottom: none !important;
                                                border-width: 4px !important;"/>
                                <div style="display: flex; flex-direction: column">
                                    <h:outputText value="#{m.name}" converter="ToLowerCaseConverter" styleClass="Fs12V Capitalize"/>
                                    <span class="Fs12V">Username: #{m.username}</span>
                                </div>
                            </div>
                        </p:column>


                    </p:dataTable>


                </r:card>

                <r:grid smCols="12" mdCols="8"  id="member" padding="#{user.unsaved}" styleClass="selected-information">

                    <r:card padding="false" styleClass="NoPaddingChild selected-card" styleClassCard="RoundedBorders">
                        <div style="display: flex; align-items: center; background-color: white; min-height: 70px; border-top-right-radius: 4px; padding-top: 20px; border-top-left-radius: 4px;">
                            <div onclick="showSelected()" class="close-selected-information" style="font-size: 20px; margin-left: 20px;"> <i class="fa fa-arrow-left"> </i> </div>
                            <h:outputText value="#{profile.user.name} #{profile.member.lastName}" styleClass="BoldGray" style="font-size: 24px;margin-left: 20px;"/>
                            <div style="display: flex; align-items: center; justify-content: flex-end; margin-right: 20px; min-width: 105px; margin-left: auto;">
                                <p:commandButton
                                        rendered="#{!utils.MEXICO_MODE or profile.member.id != utils.EMPTY_ID}"
                                        icon="fa fa-save"
                                        id="save"
                                        styleClass="minify"
                                        oncomplete="showSelectedInstantly()"
                                        value="#{msg['save']}"
                                        style="margin-left: 10px;padding: 0;"
                                        action="#{membersAdmin.save()}"
                                        update=":members, :msgs" />
                                <p:commandButton
                                        rendered="#{utils.MEXICO_MODE and profile.member.id == utils.EMPTY_ID}"
                                        icon="fa fa-save"
                                        id="saveMexico"
                                        styleClass="minify"
                                        oncomplete="showSelectedInstantly()"
                                        value="#{msg['save']}"
                                        style="margin-left: 10px; padding: 0"
                                        action="#{membersAdmin.save()}"
                                        update=":members, :msgs" >
                                </p:commandButton>
                                <p:commandButton
                                        icon="fa fa-plus"
                                        styleClass="minify"
                                        oncomplete="showSelectedInstantly()"
                                        value="#{msg['new']}"
                                        style="margin-left: 10px; padding: 0"
                                        action="#{membersAdmin.createNew()}"
                                        update=":members, :msgs"
                                        immediate="true"
                                        resetValues="true" />
                                <p:commandButton
                                        icon="fa fa-trash"
                                        value="#{msg['delete']}"
                                        action="#{membersAdmin.remove()}"
                                        update=":members, :msgs"
                                        styleClass="removeButtonColor minify"
                                        style="margin-left: 10px; padding: 0"
                                        disabled="#{user.unsaved || !user.canDelete()}">
                                    <p:confirm header="#{msg['confirmation']}" message="#{msg['areyousure']}"/>
                                </p:commandButton>
                                <p:commandButton
                                        icon="fa fa-eye"
                                        styleClass="minify"
                                        value="#{msg['supplant']}"
                                        action="#{membersAdmin.supplant()}"
                                        update=":msgs"
                                        style="margin-left: 10px; padding: 0"
                                        disabled="#{user.unsaved}"/>
                            </div>
                        </div>
                        <ui:include src="#{login.type}/users/profile/index.xhtml"/>
                    </r:card>

                </r:grid>


            </h:form>


        </ui:define>
    </ui:composition>
</f:view>
</div>

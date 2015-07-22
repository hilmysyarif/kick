<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Services Lang - Portuguese
*
* Author: github@marcelod
*
* Created:  06.05.2015
*
* Description:  Portuguese language file
*
*/

// Errors
$lang['error_csrf'] = 'O envio desse formulario não atendeu a requisitos de segurança.';

// admin
$lang['adm_service_heading']           = 'Serviços';
$lang['adm_service_subheading']        = 'Abaixo uma lista com os usuários.';
$lang['adm_service_fname_th']          = 'Nome';
$lang['adm_service_lname_th']          = 'Sobrenome';
$lang['adm_service_email_th']          = 'Email';
$lang['adm_service_groups_th']         = 'Grupos';
$lang['adm_service_status_th']         = 'Estado';
$lang['adm_service_action_th']         = 'Ação';
$lang['adm_service_active_link']       = 'Ativo';
$lang['adm_service_inactive_link']     = 'Inativo';
$lang['adm_service_create_user_link']  = 'Criar novo usuário';
$lang['adm_service_create_group_link'] = 'Criar novo grupo';

// Deactivate User
$lang['deactivate_heading']                  = 'Desativar Usuário';
$lang['deactivate_subheading']               = 'Você tem certeza que deseja desativar esse usuário <strong>%s</strong>';
$lang['deactivate_confirm_y_label']          = 'Sim:';
$lang['deactivate_confirm_n_label']          = 'Não:';
$lang['deactivate_submit_btn']               = 'Enviar';
$lang['deactivate_validation_confirm_label'] = 'confirmação';
$lang['deactivate_validation_user_id_label'] = 'user ID';

// Create User
$lang['create_user_heading']                           = 'Criar Usuário';
$lang['create_user_subheading']                        = 'Por favor informe os dados do usuário.';
$lang['create_user_fname_label']                       = 'Nome:';
$lang['create_user_lname_label']                       = 'Sobrenome:';
$lang['create_user_company_label']                     = 'Empresa:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Telefone:';
$lang['create_user_password_label']                    = 'Senha:';
$lang['create_user_password_confirm_label']            = 'Confirmar senha:';
$lang['create_user_submit_btn']                        = 'Criar Usuário';
$lang['create_user_validation_fname_label']            = 'Nome';
$lang['create_user_validation_lname_label']            = 'Sobrenome';
$lang['create_user_validation_email_label']            = 'Email';
$lang['create_user_validation_phone1_label']           = 'Primeira parte do telefone';
$lang['create_user_validation_phone2_label']           = 'Segunda parte do telefone';
$lang['create_user_validation_phone3_label']           = 'Terceira parte do telefone';
$lang['create_user_validation_company_label']          = 'Empresa';
$lang['create_user_validation_password_label']         = 'Senha';
$lang['create_user_validation_password_confirm_label'] = 'Confirmação de Senha';

// Edit User
$lang['edit_user_heading']                           = 'Editar Usuário';
$lang['edit_user_subheading']                        = 'Por favor informe os dados sobre o usuário abaixo.';
$lang['edit_user_fname_label']                       = 'Nome:';
$lang['edit_user_lname_label']                       = 'Sobrenome:';
$lang['edit_user_company_label']                     = 'Empresa:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Telefone:';
$lang['edit_user_password_label']                    = 'Senha: (se quiser mudar a senha)';
$lang['edit_user_password_confirm_label']            = 'Confirme a senha: (se quiser mudar a senha)';
$lang['edit_user_groups_heading']                    = 'Membro dos grupos';
$lang['edit_user_submit_btn']                        = 'Salvar Usuário';
$lang['edit_user_validation_fname_label']            = 'Nome';
$lang['edit_user_validation_lname_label']            = 'Sobrenome';
$lang['edit_user_validation_email_label']            = 'Email';
$lang['edit_user_validation_phone1_label']           = 'Primeira parte do fone';
$lang['edit_user_validation_phone2_label']           = 'Segunda parte do fone';
$lang['edit_user_validation_phone3_label']           = 'Terceira parte do fone';
$lang['edit_user_validation_company_label']          = 'Empresa';
$lang['edit_user_validation_groups_label']           = 'Grupos';
$lang['edit_user_validation_password_label']         = 'Senha';
$lang['edit_user_validation_password_confirm_label'] = 'Confirme a senha';

// Group
$lang['group_heading']           = 'Grupos';
$lang['group_subheading']        = 'Abaixo uma lista com os grupos.';
$lang['group_name_th']           = 'Nome';
$lang['group_desc_th']           = 'Descrição';
$lang['group_action_th']         = 'Ação';

// Create Group
$lang['create_group_title']                  = 'Criar Grupo';
$lang['create_group_heading']                = 'Criar Grupo';
$lang['create_group_subheading']             = 'Por favor informe os dados sobre o grupo abaixo.';
$lang['create_group_name_label']             = 'Nome:';
$lang['create_group_desc_label']             = 'Descrição:';
$lang['create_group_submit_btn']             = 'Criar Grupo';
$lang['create_group_validation_name_label']  = 'Nome';
$lang['create_group_validation_desc_label']  = 'Descrição';

// Edit Group
$lang['edit_group_title']                  = 'Editar Grupo';
$lang['edit_group_saved']                  = 'Grupo Salvo';
$lang['edit_group_heading']                = 'Editar Group';
$lang['edit_group_subheading']             = 'Por favor informe os dados sobre o grupo abaixo.';
$lang['edit_group_name_label']             = 'Nome:';
$lang['edit_group_desc_label']             = 'Descrição:';
$lang['edit_group_submit_btn']             = 'Salvar Grupo';
$lang['edit_group_validation_name_label']  = 'Nome';
$lang['edit_group_validation_desc_label']  = 'Descrição';

// Change Password
$lang['change_password_heading']                               = 'Mudar Senha';
$lang['change_password_old_password_label']                    = 'Senha Antiga:';
$lang['change_password_new_password_label']                    = 'Nova senha: (mínimo de %s caracteres)';
$lang['change_password_new_password_confirm_label']            = 'Confirme sua Nova Senha:';
$lang['change_password_submit_btn']                            = 'Mudar';
$lang['change_password_validation_old_password_label']         = 'Senha Antiga';
$lang['change_password_validation_new_password_label']         = 'Nova Senha';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirme sua Nova Senha';

// Forgot Password
$lang['forgot_password_heading']                 = 'Esqueceu a Senha';
$lang['forgot_password_subheading']              = 'Por favor, informe seu %s para que possamos enviar para você uma mensagem para recuparar sua senha.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Enviar';
$lang['forgot_password_validation_email_label']  = 'Email';
$lang['forgot_password_username_identity_label'] = 'Login';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_email_not_found']         = 'Este email não foi encontrado.';

// Reset Password
$lang['reset_password_heading']                               = 'Mudar Senha';
$lang['reset_password_new_password_label']                    = 'Nova senha: (mínimo de %s caracteres)';
$lang['reset_password_new_password_confirm_label']            = 'Confirme sua Nova Senha:';
$lang['reset_password_submit_btn']                            = 'Mudar';
$lang['reset_password_validation_new_password_label']         = 'Senha Antiga';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirme sua Nova Senha';

// Activation Email
$lang['email_activate_heading']    = 'Ative sua conta para %s';
$lang['email_activate_subheading'] = 'Por favor, clique nesse link para %s.';
$lang['email_activate_link']       = 'Ative sua conta';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Redefina sua senha para %s';
$lang['email_forgot_password_subheading'] = 'Por favor, clique nesse link para %s.';
$lang['email_forgot_password_link']       = 'Redefina sua senha';

// New Password Email
$lang['email_new_password_heading']    = 'Nova senha para %s';
$lang['email_new_password_subheading'] = 'Sua senha foi redefinida para: %s';
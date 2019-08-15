<?php

/**
* This file is part of the phpBB Forum extension package
* IUM (Inactive User Manager).
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.1.0-rc2] (https://github.com/phpBBTraducoes)
* @copyright (c) 2016 by Andreas Kourtidis
* @license   GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the CREDITS.txt file.
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'USER_SELF_DELETE_TITLE'		=>  'Página de exclusão automática.',
	'USER_SELF_DELETE_EXPLAIN'		=>  'Ao marcar a caixa de verificação e clicar no botão confirmar, você aceita excluir sua conta de usuário neste fórum.<br/>Todos os seus posts permanecerão intactos, mas você não poderá mais se conectar ao seu nome de usuário/senha.<br/>Se você criar uma conta com o mesmo nome de usuário, o post anterior não será conectada à nova conta.',
	'USER_SELF_DELETE_VERIFY'		=>  'Eu entendo as conseqüências e eu verifico',
	'HAVE_TO_LOGIN'					=>  'Desculpe, mas você precisa fazer o login para ver esta página.',
	'HAVE_TO_VERIFY'				=>  'Por favor, verifique a caixa de verificação.',
	'PAGE_NOT_EXIST'				=>  'Lamentamos muito o inconveniente.<br/><br/>Mas a exclusão automática está desativada.<br/>Se você acessou esta página acidentalmente, verifique a URL que você digitou no seu navegador.<br/>Se você seguiu um link de um e-mail que você recebeu de nós, entre em contato com o administrador do site.',
	'NEEDS_APPROVAL'				=>	'Lamentamos muito que você tenha decidido deixar %s. Observe que a sua conta ainda não foi eliminada. Primeiro, precisa de ser aprovada. Por favor, nos dê algum tempo para esta ação. Em 3 segundos você será redirecionado para nossa home page.',
	'USER_SELF_DELETE_SUCCESS'		=>	'Lamentamos muito que você tenha decidido deixar %s. Sua conta foi excluída. Em 3 segundos você será redirecionado para nossa home page.', 
	'INVALID_LINK_OR_USER'			=>	'Combinação inválida.',
	
	
	
));

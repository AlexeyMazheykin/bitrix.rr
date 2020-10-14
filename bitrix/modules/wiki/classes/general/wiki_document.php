<?

IncludeModuleLangFile(__FILE__);

if(!CModule::IncludeModule('iblock'))
	return;

class CWikiDocument extends CIBlockDocument
{
	function CanUserOperateDocument($operation, $userId, $documentId, $arParameters = array())
	{    
		if (CWikiSocnet::IsSocNet())
		{
			return CWikiUtils::CheckAccess('write');
		}
		else
			return parent::CanUserOperateDocument($operation, $userId, $documentId, $arParameters);    
	}
}

?>
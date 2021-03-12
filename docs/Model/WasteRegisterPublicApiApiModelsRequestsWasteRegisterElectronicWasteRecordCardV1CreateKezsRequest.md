# WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eup_id** | **string** | Id miejsca prowadzenia działalności | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**is_waste_generating** | **bool** | W - wytwarzanie odpadów | [optional] 
**is_waste_collecting** | **bool** | Zb - zbieranie odpadów | [optional] 
**is_salvage** | **bool** | Od - odzysk | [optional] 
**is_neutralization** | **bool** | Un - unieszkodliwianie | [optional] 
**year** | **int** | Rok kalendarzowy | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**kezs_equipment_group_cards** | [**\Swagger\Client\Model\BdoServiceModelsDtoWasteRegisterElectronicWasteRecordCardCreateKezsEquipmentGroupCardDto[]**](BdoServiceModelsDtoWasteRegisterElectronicWasteRecordCardCreateKezsEquipmentGroupCardDto.md) | Lista grup zebranego sprzętu | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



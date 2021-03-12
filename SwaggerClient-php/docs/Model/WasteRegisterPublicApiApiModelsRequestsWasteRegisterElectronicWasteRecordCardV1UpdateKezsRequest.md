# WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kezs_id** | **string** | Id karty ewidencji zużytego sprzętu elektrycznego i elektronicznego | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**is_waste_generating** | **bool** | W - wytwarzanie odpadów | [optional] 
**is_waste_collecting** | **bool** | Zb - zbieranie odpadów | [optional] 
**is_salvage** | **bool** | Od - odzysk | [optional] 
**is_neutralization** | **bool** | Un - unieszkodliwianie | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**kezs_equipment_group_card** | [**\Swagger\Client\Model\BdoServiceModelsDtoWasteRegisterElectronicWasteRecordCardUpdateKezsEquipmentGroupCardDto[]**](BdoServiceModelsDtoWasteRegisterElectronicWasteRecordCardUpdateKezsEquipmentGroupCardDto.md) | Lista obiektów Zebranego sprzętu | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



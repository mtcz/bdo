# WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonWithKeonItemsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keon_id** | **string** | Id karty ewidencji odpadów niebezpiecznych | [optional] 
**card_number** | **string** | Numer karty | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**company_id** | **string** | Id podmiotu | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Data utworzenia | [optional] 
**created_by_user** | **string** | Utworzone przez użytkownika | [optional] 
**year** | **int** | Rok kalendarzowy | [optional] 
**can_be_deleted** | **bool** | Czy może być usunięta | [optional] 
**keon_items** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1PaginatedPageKeonItemWithCompanyDto**](WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1PaginatedPageKeonItemWithCompanyDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



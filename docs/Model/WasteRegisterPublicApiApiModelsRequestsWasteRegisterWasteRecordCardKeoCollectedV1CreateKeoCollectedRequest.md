# WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1CreateKeoCollectedRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keo_id** | **string** | Id karty ewidencji odpadów | [optional] 
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**collected_date** | [**\DateTime**](\DateTime.md) | Data przejęcia odpadów | [optional] 
**collected_mass** | **double** | Masa przejętych odpadów [Mg] | [optional] 
**is_entry_based_on_kpo** | **bool** | Wpis dokonywany na podstawie karty przekazania odpadów | [optional] 
**is_import_to_rp** | **bool** | Przywóz do RP | [optional] 
**is_equipment_owner_exempt_from_record** | **bool** | Posiadacz odpadów zwolniony z obowiązku prowadzenia ewidencji odpadów | [optional] 
**country_id** | **int** | Id kraju | [optional] 
**locality** | **string** | Miejscowość | [optional] 
**street** | **string** | Ulica | [optional] 
**building_number** | **string** | Numer budynku | [optional] 
**local_number** | **string** | Numer lokalu | [optional] 
**postal_code** | **string** | Kod pocztowy | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**installation_name** | **string** | Nazwa instalacji | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



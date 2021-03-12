# WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keo_forwarded_id** | **string** | Id wpisu Przekazane odpady | [optional] 
**keo_id** | **string** | Id karty ewidencji odpadów | [optional] 
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**kpo_card_number** | **string** | Numer karty kpo | [optional] 
**based_on_kpo** | **bool** | Wpis dokonywany na podstawie karty przekazania odpadów | [optional] 
**transfer_abroad** | **bool** | Wywóz poza RP | [optional] 
**transfer_to_natural_persons** | **bool** | Przekazane osobom fizycznym lub innym jednostkom organizacyjnym niebędącym przedsiębiorcami | [optional] 
**owner_exempt_from_records** | **bool** | Posiadacz odpadów zwolniony z obowiązku prowadzenia ewidencji odpadów | [optional] 
**waste_collection_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**waste_mass** | **double** | Masa odpadów | [optional] 
**country_id** | **int** | Id kraju | [optional] 
**locality** | **string** | Miejscowość | [optional] 
**street** | **string** | Ulica | [optional] 
**building_number** | **string** | Numer budynku | [optional] 
**local_number** | **string** | Numer lokalu | [optional] 
**postal_code** | **string** | Kod pocztowy | [optional] 
**transport_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_road_transport** | **bool** | Rodzaj środka transportu: drogowy | [optional] 
**is_railway_transport** | **bool** | Rodzaj środka transportu: kolejowy | [optional] 
**is_maritime_transport** | **bool** | Rodzaj środka transportu: morski | [optional] 
**is_air_transport** | **bool** | Rodzaj środka transportu: powietrzny | [optional] 
**is_inland_water_transport** | **bool** | Rodzaj środka transportu: wodny-śródlądowy | [optional] 
**process_r** | **bool** | Odpady objęte procesem: R - odzysku | [optional] 
**process_d** | **bool** | Odpady objęte procesem: D - unieszkodliwiania | [optional] 
**waste_process_id** | **int** | Id procesu przetwarzania odpadów | [optional] 
**is_recycle** | **bool** | Recykling | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



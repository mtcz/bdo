# WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementHandedOverRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kezs_waste_management_handed_over_id** | **string** | Id wpisu Gospodarowanie sprzętem - przekazane do innego zakładu przetwarzania | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**kpok_id** | **string** | Id Karty Przekazania Odpadów Komunalnych | [optional] 
**kpo_handover_date** | [**\DateTime**](\DateTime.md) | Data przekazania do innego zakładu przetwarzania | [optional] 
**waste_process_id** | **int** | Id procesu przetwarzania odpadów | [optional] 
**waste_mass** | **double** | Masa odpadów | [optional] 
**country_id** | **int** | Id kraju | [optional] 
**locality** | **string** | Miejscowość | [optional] 
**street** | **string** | Ulica | [optional] 
**postal_code** | **string** | Kod pocztowy | [optional] 
**building_number** | **string** | Numer budynku | [optional] 
**local_number** | **string** | Numer lokalu | [optional] 
**waste_transport_start_date** | [**\DateTime**](\DateTime.md) | Data rozpoczęcia transportu | [optional] 
**is_salvage_waste_process** | **bool** | Proces - odzysk | [optional] 
**is_recycling** | **bool** | Recykling | [optional] 
**is_entry_based_on_kpo** | **bool** | Wpis dokonywany na podstawie karty przekazania odpadów | [optional] 
**is_entry_based_on_kpok** | **bool** | Wpis dokonywany na podstawie karty przekazania odpadów komunalnych | [optional] 
**is_export_from_rp** | **bool** | Wywóz poza RP | [optional] 
**is_equipment_owner_exempt_from_record** | **bool** | Posiadacz odpadów zwolniony z obowiązku prowadzenia ewidencji odpadów | [optional] 
**is_handed_over** | **bool** | Przekazane do innego zakładu przetwarzania | [optional] 
**additional_information** | **string** | Informacje dodatkowe | [optional] 
**transport_type** | **int** | Rodzaj środka transportu | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



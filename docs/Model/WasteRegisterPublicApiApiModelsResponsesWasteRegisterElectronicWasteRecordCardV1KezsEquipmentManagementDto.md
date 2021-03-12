# WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kezs_equipment_management_id** | **string** | Id wpisu Gospodarowanie sprzętem | [optional] 
**kezs_equipment_group_card_id** | **string** | Id grupy zebranego sprzętu | [optional] 
**created_by_user_id** | **string** | Id użytkownika sporządzającego | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Data utworzenia | [optional] 
**is_handed_over** | **bool** | Przekazane do innego zakładu przetwarzania | [optional] 
**is_used** | **bool** | Przetwarzanie sprzętu we własnym zakeresie | [optional] 
**is_recycled** | **bool** | Zużyty sprzet przeznaczony do ponownego użycia | [optional] 
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**kpok_id** | **string** | Id Karty Przekazania Odpadów Komunalnych | [optional] 
**is_entry_based_on_kpo** | **bool** | Wpis dokonywany na podstawie karty przekazania odpadów | [optional] 
**is_entry_based_on_kpok** | **bool** | Wpis dokonywany na podstawie karty przekazania odpadów komunalnych | [optional] 
**kpo_handover_date** | [**\DateTime**](\DateTime.md) | Data przekazania do innego zakładu przetwarzania | [optional] 
**handed_over_equipment_mass** | **double** | Masa przekazanych odpadów | [optional] 
**recycled_equipment_mass** | **double** | Masa sprzętu przeznaczonego do ponownego użycia | [optional] 
**used_equipment_mass** | **double** | Masa przetwarzanego sprzętu | [optional] 
**additional_information** | **string** | Informacje dodatkowe | [optional] 
**installation_name** | **string** | Nazwa instalacji | [optional] 
**created_by_user** | **string** | Utworzone przez użytkownika | [optional] 
**kpo_card_number** | **string** | Numer karty kpo | [optional] 
**kpok_card_number** | **string** |  | [optional] 
**waste_process_id** | **int** | Id procesu przetwarzania odpadów | [optional] 
**is_recycling** | **bool** | Recykling | [optional] 
**is_recycled_parts** | **bool** | Części składowe - recykling | [optional] 
**recycled_parts_equipment_mass** | **double** | Masa zużytego sprzętu przeznaczonego do ponownego użycia | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



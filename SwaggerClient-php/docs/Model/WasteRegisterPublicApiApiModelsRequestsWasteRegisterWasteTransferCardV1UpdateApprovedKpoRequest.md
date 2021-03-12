# WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**waste_process_id** | **int** | Id rodzaju procesu przetwarzania | [optional] 
**waste_mass** | **double** | Masa odpadów | [optional] 
**vehicle_reg_number** | **string** | Numer rejestracyjny środka transportu | [optional] 
**certificate_number** | **string** | Numer certyfikatu | [optional] 
**planned_transport_time** | [**\DateTime**](\DateTime.md) | Data i godzina rozpoczęcia transportu | [optional] 
**real_transport_time** | [**\DateTime**](\DateTime.md) | Rzeczywista data i godzina rozpoczęcia transportu | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**is_waste_generating** | **bool** |  | [optional] [default to false]
**waste_generated_teryt_pk** | **string** |  | [optional] 
**waste_generating_additional_info** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



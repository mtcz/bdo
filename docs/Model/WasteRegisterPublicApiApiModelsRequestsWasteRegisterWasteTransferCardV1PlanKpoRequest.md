# WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1PlanKpoRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_company_id** | **string** | Id podmiotu transportującego odpady | [optional] 
**receiver_company_id** | **string** | Id podmiotu przejmującego odpady | [optional] 
**receiver_eup_id** | **string** | Id miejsca prowadzenia działalności podmiotu przejmującego odpady | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**vehicle_reg_number** | **string** | Numer rejestracyjny środka transportu | [optional] 
**waste_mass** | **double** | Masa odpadów | [optional] 
**planned_transport_time** | [**\DateTime**](\DateTime.md) | Data i godzina rozpoczęcia transportu | [optional] 
**waste_process_id** | **int** | Id rodzaju procesu przetwarzania | [optional] 
**certificate_number_and_box_numbers** | **string** | Numer certyfikatu oraz numery pojemników | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**is_waste_generating** | **bool** |  | [optional] [default to false]
**waste_generated_teryt_pk** | **string** |  | [optional] 
**waste_generating_additional_info** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



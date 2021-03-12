# WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ApprovedKpoDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**year** | **int** | Rok kalendarzowy | [optional] 
**card_number** | **string** | Numer Karty Przekazania Odpadów | [optional] 
**card_status_id** | **int** | Id statusu Karty Przekazania Odpadów | [optional] 
**card_status** | **string** | Status karty | [optional] 
**sender_company_id** | **string** | Id podmiotu przekazującego odpady | [optional] 
**sender_eup_id** | **string** | Id miejsca prowadzenia działalności przekazującego odpady | [optional] 
**carrier_company_id** | **string** | Id podmiotu transportującego odpady | [optional] 
**receiver_company_id** | **string** | Id podmiotu przejmującego odpady | [optional] 
**receiver_eup_id** | **string** | Id miejsca prowadzenia działalności przejmującego odpady | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**vehicle_reg_number** | **string** | Numer rejestracyjny środka transportu | [optional] 
**waste_mass** | **double** | Masa odpadów | [optional] 
**planned_transport_time** | [**\DateTime**](\DateTime.md) | Planowana data i godzina transportu | [optional] 
**card_approval_time** | [**\DateTime**](\DateTime.md) | Data i godzina zatwierdzenia Karty Przekazania Odpadów | [optional] 
**real_transport_time** | [**\DateTime**](\DateTime.md) | Rzeczywista data i godzina transportu | [optional] 
**approval_user** | **string** | Użytkownik zatwierdzający Kartę Przekazania Odpadów | [optional] 
**waste_process_id** | **int** | Id rodzaju procesu przetwarzania | [optional] 
**certificate_number_and_box_numbers** | **string** | Numer certyfikatu oraz numery pojemników | [optional] 
**card_status_code_name** | **string** | Oznaczenie kodowe statusu karty | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**waste_code_extended** | **bool** | Flaga ustawiana na true, jeśli kod odpadu ma status extended | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu extended | [optional] 
**hazardous_waste_reclassification** | **bool** | Flaga ustawiana na true, jeśli zmiana statusu odpadów niebezpiecznych na inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu po zmianie statusu odpadów niebezpiecznych na inne niż niebezpieczne | [optional] 
**is_waste_generating** | **bool** |  | [optional] 
**waste_generated_teryt** | **string** |  | [optional] 
**waste_generating_additional_info** | **string** |  | [optional] 
**waste_generated_teryt_pk** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



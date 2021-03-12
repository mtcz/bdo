# WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ConfirmationGeneratedKpoDto

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
**card_approval_time** | [**\DateTime**](\DateTime.md) | Data zatwierdzenia karty | [optional] 
**approval_user** | **string** | Użytkownik zatwierdzający kartę | [optional] 
**real_transport_time** | [**\DateTime**](\DateTime.md) | Rzeczywista data i godzina transportu | [optional] 
**waste_process_id** | **int** | Id procesu przetwarzania odpadów | [optional] 
**certificate_number_and_box_numbers** | **string** | Numer certyfikatu oraz numery pojemników | [optional] 
**generating_confirmation_user** | **string** | Użytkownik generujący potwierdzenie | [optional] 
**generating_confirmation_time** | [**\DateTime**](\DateTime.md) | Data wygenerowania potwierdzenia | [optional] 
**card_status_code_name** | **string** | Oznaczenie kodowe statusu karty | [optional] 
**is_revised** | **bool** | Czy korygowana | [optional] 
**revised_at** | [**\DateTime**](\DateTime.md) | Data wprowadzenia korekty | [optional] 
**revised_by** | **string** | Imię i Nazwisko osoby korygującej kartę | [optional] 
**revised_waste_mass** | **double** | Skorygowana masa odpadów | [optional] 
**revised_waste_code_id** | **int** | Skorygowany kod i rodzaj odpadów | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**is_waste_generating** | **bool** |  | [optional] 
**waste_generated_teryt** | **string** |  | [optional] 
**waste_generating_additional_info** | **string** |  | [optional] 
**waste_generated_teryt_pk** | **string** |  | [optional] 
**rejected_by_user** | **string** |  | [optional] 
**card_rejection_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**remarks** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



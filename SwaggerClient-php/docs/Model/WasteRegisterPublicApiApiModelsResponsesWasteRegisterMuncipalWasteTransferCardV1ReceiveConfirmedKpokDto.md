# WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReceiveConfirmedKpokDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kpok_id** | **string** | Id Karty Przekazania Odpadów Komunalnych | [optional] 
**year** | **int** | Rok kalendarzowy | [optional] 
**card_status_id** | **int** | Id statusu karty | [optional] 
**card_status** | **string** | Status karty | [optional] 
**sender_company_id** | **string** | Id przekazującego odpady | [optional] 
**sender_eup_id** | **string** | Id miejsca prowadzenia działalności przekazującego | [optional] 
**carrier_company_id** | **string** | Id transportującego odpady | [optional] 
**receiver_company_id** | **string** | Id przejmującego odpady | [optional] 
**receiver_eup_id** | **string** | Id miejsca prowadzenia działalności przejmującego | [optional] 
**commune_id** | **string** | Id gminy | [optional] 
**commune_area** | **string** | Obszar gminy | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**vehicle_reg_number** | **string** | Numer rejestracyjny środka transportu | [optional] 
**waste_mass** | **double** | Masa odpadów | [optional] 
**card_subtype** | **string** | Podtyp karty | [optional] 
**corrected_waste_mass** | **double** | Skorygowana masa odpadów | [optional] 
**remarks** | **string** | Uwagi | [optional] 
**planned_transport_time** | [**\DateTime**](\DateTime.md) | Planowana data rozpoczęcia transportu | [optional] 
**real_transport_time** | [**\DateTime**](\DateTime.md) | Data rozpoczęcia transportu | [optional] 
**approval_user** | **string** | Użytkownik zatwierdzający kartę | [optional] 
**card_approval_time** | [**\DateTime**](\DateTime.md) | Data zatwierdzenia karty | [optional] 
**generating_confirmation_user** | **string** | Użytkownik generujący potwierdzenie | [optional] 
**generating_confirmation_time** | [**\DateTime**](\DateTime.md) | Data wygenerowania potwierdzenia | [optional] 
**receive_confirmation_user** | **string** | Użytkownik generujący potwierdzenie | [optional] 
**receive_confirmation_time** | [**\DateTime**](\DateTime.md) | Data otrzymania potwierdzenia | [optional] 
**card_status_code_name** | **string** | Kod statusu karty | [optional] 
**card_number** | **string** | Numer karty | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**is_revised** | **bool** | Czy korygowana | [optional] 
**revised_at** | [**\DateTime**](\DateTime.md) | Data wprowadzenia korekty | [optional] 
**revised_by** | **string** | Imię i Nazwisko osoby korygującej kartę | [optional] 
**revised_waste_mass** | **double** | Skorygowana masa odpadów | [optional] 
**revised_waste_code_id** | **int** | Skorygowany kod i rodzaj odpadów | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**rejected_by_user** | **string** |  | [optional] 
**card_rejection_time** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



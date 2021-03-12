# WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ApprovedKpokDto

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
**card_approval_time** | [**\DateTime**](\DateTime.md) | Data zatwierdzenia karty | [optional] 
**planned_transport_time** | [**\DateTime**](\DateTime.md) | Planowana data rozpoczęcia transportu | [optional] 
**real_transport_time** | [**\DateTime**](\DateTime.md) | Data rozpoczęcia transportu | [optional] 
**approval_user** | **string** | Użytkownik zatwierdzający kartę | [optional] 
**card_status_code_name** | **string** | Kod statusu karty | [optional] 
**card_number** | **string** | Numer karty | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



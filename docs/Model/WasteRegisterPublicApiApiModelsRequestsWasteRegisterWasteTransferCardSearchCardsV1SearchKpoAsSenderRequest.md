# WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsSenderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pagination_parameters** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginationParameters**](WasteRegisterPublicApiApiModelsCollectionsPaginationParameters.md) | Parametry stronicowania | [optional] 
**search_in_carriers** | **bool** | Flaga ustawiana na true, jeśli wyszukiwanie ma się odbyć w kontekście transportującego | [optional] 
**search_in_receivers** | **bool** | Flaga ustawiana na true, jeśli wyszukiwanie ma się odbyć w kontekście przejmującego | [optional] 
**name** | **string** | Nazwa podmiotu | [optional] 
**locality** | **string** | Miejscowość | [optional] 
**street** | **string** | Ulica | [optional] 
**nip** | **string** | NIP | [optional] 
**identification_number** | **string** | Numer identyfikacyjny podmiotu | [optional] 
**waste_code_and_description** | **string** | Kod odpadu | [optional] 
**card_number** | **string** | Numer karty | [optional] 
**card_status_code_names** | **string** | Codename statusu karty | [optional] 
**transport_time** | [**\DateTime**](\DateTime.md) | Data rozpoczęcia transportu | [optional] 
**receive_confirmation_time** | [**\DateTime**](\DateTime.md) | Data przejęcia | [optional] 
**sender_first_name_and_last_name** | **string** | Imię i nazwisko wystawiającego | [optional] 
**receiver_first_name_and_last_name** | **string** | Imię i nazwisko przejmującego | [optional] 
**vehicle_reg_number** | **string** | Numer rejestracyjny środka transportu | [optional] 
**transport_date_range** | **bool** |  | [optional] 
**transport_date_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**transport_date_to** | [**\DateTime**](\DateTime.md) |  | [optional] 
**receive_confirmation_date_range** | **bool** |  | [optional] 
**receive_confirmation_date_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**receive_confirmation_date_to** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



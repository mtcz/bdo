# WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchReceiverKpokAsSenderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page_size** | **int** | Maksymalna liczba wyników wyszukiwania | [optional] 
**receiver_identification_number** | **string** | Numer identyfikacyjny podmiotu przejmującego | [optional] 
**receiver_name** | **string** | Nazwa podmiotu przejmującego | [optional] 
**receiver_nip** | **string** | NIP podmiotu przejmującego | [optional] 
**card_number** | **string** | Numer karty | [optional] 
**receive_confirmation_time** | [**\DateTime**](\DateTime.md) | Data otrzymania potwierdzenia | [optional] 
**card_status_code_names** | **string** | Lista statusów Kart Przekazania Odpadów Komunalnych rozdzielona średnikami. Słownik wartości dostępny w kontrolerze CardStatus | [optional] 
**waste_code_name** | **string** | Kod odpadów | [optional] 
**pagination_parameters** | [**\Swagger\Client\Model\BDOApiClientModelsPaginationParameters**](BDOApiClientModelsPaginationParameters.md) |  | [optional] 
**is_used** | **bool** |  | [optional] 
**commune_id** | **string** |  | [optional] 
**card_subtype** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



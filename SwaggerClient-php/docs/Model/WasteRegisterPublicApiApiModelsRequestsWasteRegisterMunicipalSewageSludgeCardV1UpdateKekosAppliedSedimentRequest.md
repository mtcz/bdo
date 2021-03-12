# WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosAppliedSedimentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kekos_applied_sediment_id** | **string** | Id wpisu Zastosowane osady | [optional] 
**kekos_research_card_id** | **string** | Id karty badań | [optional] 
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**applied_sludge_mass** | **double** | Masa zastosowanych komunalnych osadów ściekowych | [optional] 
**applied_sludge_dry_matter_mass** | **double** | Sucha masa zastosowanych komunalnych osadów ściekowych | [optional] 
**sludge_application_date** | [**\DateTime**](\DateTime.md) | Data zastosowania komunalnych osadów ściekowych | [optional] 
**sludge_application_place_teryt_pk** | **string** | Miejsce stosowania komunalnych osadów ściekowych | [optional] 
**sludge_application_surface** | **double** | Powierzchnia zastosowania komunalnych osadów ściekowych [ha] | [optional] 
**kekos_batch_of_generated_sediment_id** | **string** | Id wpisu Wytworzone osady | [optional] 
**is_application_purpose_crops** | **bool** | Cel: w rolnictwie | [optional] 
**is_application_purpose_plants** | **bool** | Cel: do uprawy roślin przeznaczonych do produkcji kompostu | [optional] 
**is_application_purpose_inedible_plants** | **bool** | Cel: do uprawy roślin nieprzeznaczonych do spożycia i produkcji pasz | [optional] 
**is_application_purpose_reclamation** | **bool** | Cel: do rekultywacji terenów w tym gruntów na cele rolne | [optional] 
**is_application_purpose_land_adjustment** | **bool** | Cel: przy dostosowywaniu gruntów do określonych potrzeb wynikających z planów gospodarki odpadami(..) | [optional] 
**is_soil_group_light** | **bool** | Grupa glepy: lekka | [optional] 
**is_soil_group_medium** | **bool** | Grupa glepy: średnia | [optional] 
**is_soil_group_heavy** | **bool** | Grupa glepy: ciężka | [optional] 
**land_surface_rulers** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosLandSurfaceRulerDto[]**](WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosLandSurfaceRulerDto.md) | Informacje o miejscu stosowania osadów | [optional] 
**lot_precincts** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateLotPrecinctDto[]**](WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateLotPrecinctDto.md) | Lista numerów działek i obrębów geodezyjnych | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



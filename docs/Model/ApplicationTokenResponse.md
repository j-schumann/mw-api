# ApplicationTokenResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Die \&quot;ID\&quot; des Tokens. Diese ist bei späteren Authentifizierungsvorgängen als Nutzername zu verwenden. | 
**crdate** | [**\DateTime**](\DateTime.md) | Das Erstelldatum als ISO 8601-Zeitstempel. | 
**token** | **string** | Der \&quot;geheime\&quot; Teil des Tokens. Dieser ist bei späteren Authentifzierungsvorgängen als Passwort zu benutzen; außer in der initialen Antwort nach Erstellen des Tokens ist kein lesender Zugriff mehr auf diesen Wert möglich. | 
**description** | **string** | Der frei wählbare Beschreibungstext des Tokens, der zuvor vom Benutzer vorgegeben wurde. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


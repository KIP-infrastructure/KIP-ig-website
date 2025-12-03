# QuestionnaireLatest - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireLatest**

## SearchParameter: QuestionnaireLatest 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireLatest | *Version*:2.15.0 |
| Active as of 2025-12-03 | *Computable Name*:QuestionnaireLatest |

 
Search Questionnaire for 'latest' extension 

## QuestionnaireLatest

Parameter `latest`:`token`

Search Questionnaire for 'latest' extension

| | |
| :--- | :--- |
| Resource | [Questionnaire](http://hl7.org/fhir/R4/questionnaire.html) |
| Expression | `Questionnaire.extension.where(url='latest').value` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireLatest",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireLatest",
  "version" : "2.15.0",
  "name" : "QuestionnaireLatest",
  "status" : "active",
  "date" : "2025-12-03T09:09:34+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Search Questionnaire for 'latest' extension",
  "code" : "latest",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.extension.where(url='latest').value",
  "comparator" : ["eq"]
}

```

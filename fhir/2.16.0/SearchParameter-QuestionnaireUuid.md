# QuestionnaireUuid - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireUuid**

## SearchParameter: QuestionnaireUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid | *Version*:2.16.0 |
| Active as of 2025-12-04 | *Computable Name*:QuestionnaireUuid |

 
Search by uuid in Questionnaire 

## QuestionnaireUuid

Parameter `uuid`:`token`

Search by uuid in Questionnaire

| | |
| :--- | :--- |
| Resource | [Questionnaire](http://hl7.org/fhir/R4/questionnaire.html) |
| Expression | `Questionnaire.extension.where(url='uuid')` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid",
  "version" : "2.16.0",
  "name" : "QuestionnaireUuid",
  "status" : "active",
  "date" : "2025-12-04T11:23:14+00:00",
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
  "description" : "Search by uuid in Questionnaire",
  "code" : "uuid",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.extension.where(url='uuid')",
  "comparator" : ["eq"]
}

```

# Questionnaire url+version - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire url+version**

## SearchParameter: Questionnaire url+version 

| | |
| :--- | :--- |
| *Official URL*:http://kip.sundk.dk/fhir/SearchParameter/SP-Questionnaire-urlversion | *Version*:2.13.0 |
| Active as of 2025-11-11 | *Computable Name*:urlversion |

 
SearchParameter to match Questionnaire by both url and version 

## urlversion

Parameter `urlversion`:`token`

SearchParameter to match Questionnaire by both url and version

| | |
| :--- | :--- |
| Resource | [Questionnaire](http://hl7.org/fhir/R4/questionnaire.html) |
| Expression | `Questionnaire.url & '_' & Questionnaire.version` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SP-Questionnaire-urlversion",
  "url" : "http://kip.sundk.dk/fhir/SearchParameter/SP-Questionnaire-urlversion",
  "version" : "2.13.0",
  "name" : "urlversion",
  "status" : "active",
  "date" : "2025-11-11T11:32:01+00:00",
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
  "description" : "SearchParameter to match Questionnaire by both url and version",
  "code" : "urlversion",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.url & '_' & Questionnaire.version"
}

```

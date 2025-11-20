# SorQuestionnaire - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SorQuestionnaire**

## SearchParameter: SorQuestionnaire 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaire | *Version*:2.14.1 |
| Active as of 2025-11-20 | *Computable Name*:SorQuestionnaire |

 
Search By SOR in Questionnaire 

## SorQuestionnaire

Parameter `sor`:`token`

Search By SOR in Questionnaire

| | |
| :--- | :--- |
| Resource | [Questionnaire](http://hl7.org/fhir/R4/questionnaire.html) |
| Expression | `Questionnaire.jurisdiction.extension.where(url='sor')` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SorQuestionnaire",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaire",
  "version" : "2.14.1",
  "name" : "SorQuestionnaire",
  "status" : "active",
  "date" : "2025-11-20T08:55:33+00:00",
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
  "description" : "Search By SOR in Questionnaire",
  "code" : "sor",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.jurisdiction.extension.where(url='sor')",
  "comparator" : ["eq"]
}

```

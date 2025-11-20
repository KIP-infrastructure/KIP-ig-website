# SorQuestionnaireResponse - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SorQuestionnaireResponse**

## SearchParameter: SorQuestionnaireResponse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaireResponse | *Version*:2.14.1 |
| Active as of 2025-11-20 | *Computable Name*:SorQuestionnaireResponse |

 
Search By SOR in Questionnaire 

## SorQuestionnaireResponse

Parameter `sorCode`:`token`

Search By SOR in Questionnaire

| | |
| :--- | :--- |
| Resource | [QuestionnaireResponse](http://hl7.org/fhir/R4/questionnaireresponse.html) |
| Expression | `QuestionnaireResponse.author.extension.where(url='sorCode')` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SorQuestionnaireResponse",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaireResponse",
  "version" : "2.14.1",
  "name" : "SorQuestionnaireResponse",
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
  "code" : "sorCode",
  "base" : ["QuestionnaireResponse"],
  "type" : "token",
  "expression" : "QuestionnaireResponse.author.extension.where(url='sorCode')",
  "comparator" : ["eq"]
}

```

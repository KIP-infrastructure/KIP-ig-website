# SorQuestionnaireResponse - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SorQuestionnaireResponse**

## SearchParameter: SorQuestionnaireResponse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaireResponse | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:SorQuestionnaireResponse |

 
Search By SOR in Questionnaire 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SorQuestionnaireResponse",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaireResponse",
  "version" : "2.17.1",
  "name" : "SorQuestionnaireResponse",
  "status" : "active",
  "date" : "2025-12-09T08:52:30+00:00",
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

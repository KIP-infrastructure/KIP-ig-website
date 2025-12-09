# SorQuestionnaire - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SorQuestionnaire**

## SearchParameter: SorQuestionnaire 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaire | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:SorQuestionnaire |

 
Search By SOR in Questionnaire 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SorQuestionnaire",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/SorQuestionnaire",
  "version" : "2.17.1",
  "name" : "SorQuestionnaire",
  "status" : "active",
  "date" : "2025-12-09T08:48:57+00:00",
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

# Ann Arbor staging system - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ann Arbor staging system**

## CodeSystem: Ann Arbor staging system 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnnArborStagingClassification | *Version*:2.16.0 |
| Active as of 2022-07-11 | *Computable Name*:AnnArborStagingClassification |

 
Ann Arbor staging system; Link: https://radiopaedia.org/articles/ann-arbor-staging-system 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnnArborStagingClassification](ValueSet-AnnArborStagingClassification.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnnArborStagingClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnnArborStagingClassification",
  "version" : "2.16.0",
  "name" : "AnnArborStagingClassification",
  "title" : "Ann Arbor staging system",
  "status" : "active",
  "date" : "2022-07-11T00:00:00+02:00",
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
  "description" : "Ann Arbor staging system; Link: https://radiopaedia.org/articles/ann-arbor-staging-system",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "stage_1",
      "display" : "Stage 1",
      "definition" : "Stage 1: Involvement of a single lymph node region or of a single extralymphatic organ or site"
    },
    {
      "code" : "stage_2",
      "display" : "Stage 2",
      "definition" : "Stage 2: Involvement of two or more lymph node regions on the same side of the diaphragm or localized involvement of an extralymphatic organ or site"
    },
    {
      "code" : "stage_3",
      "display" : "Stage 3",
      "definition" : "Stage 3: Involvement of lymph node regions or structures on both sides of the diaphragm"
    },
    {
      "code" : "stage_4",
      "display" : "Stage 4",
      "definition" : "Stage 4: diffuse or disseminated involvement of one or more extralymphatic organs, or either:\n- isolated extralymphatic organ involvement without adjacent regional lymph node involvement, but with disease in distant sites\n- involvement of the liver, bone marrow, pleura or cerebrospinal fluid"
    }
  ]
}

```

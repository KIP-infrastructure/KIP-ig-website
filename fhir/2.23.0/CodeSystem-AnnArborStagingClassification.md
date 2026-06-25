# Ann Arbor staging system - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ann Arbor staging system**

## CodeSystem: Ann Arbor staging system 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnnArborStagingClassification | *Version*:2.23.0 |
| Active as of 2022-07-11 | *Computable Name*:AnnArborStagingClassificationCS |

 
Ann Arbor staging system; Link: https://radiopaedia.org/articles/ann-arbor-staging-system 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnnArborStagingClassification](ValueSet-AnnArborStagingClassification.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnnArborStagingClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnnArborStagingClassification",
  "version" : "2.23.0",
  "name" : "AnnArborStagingClassificationCS",
  "title" : "Ann Arbor staging system",
  "status" : "active",
  "date" : "2022-07-11T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Ann Arbor staging system; Link: https://radiopaedia.org/articles/ann-arbor-staging-system",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
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
  }]
}

```

# Disease phase - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Disease phase**

## CodeSystem: Disease phase 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DiseasePhase | *Version*:2.23.1 |
| Active as of 2022-06-07 | *Computable Name*:DiseasePhase |

 
Disease phase 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ProgressionCML](ValueSet-ProgressionCML.md)
* [Sygdomsfase](ValueSet-Sygdomsfase.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DiseasePhase",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasePhase",
  "version" : "2.23.1",
  "name" : "DiseasePhase",
  "title" : "Disease phase",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Disease phase",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
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
    "code" : "chronic",
    "display" : "Chronic phase",
    "definition" : "Chronic phase / Kronisk fase / SNOMED-CT: 278177007"
  },
  {
    "code" : "accelerated",
    "display" : "Accelerated phase",
    "definition" : "Accelerated phase / Accelereret fase / SNOMED-CT: 278179005"
  },
  {
    "code" : "blast_crisis",
    "display" : "Blast crisis",
    "definition" : "Blast crisis / Blastkrise"
  }]
}

```

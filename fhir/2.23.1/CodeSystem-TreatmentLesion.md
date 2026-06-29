# Treatment lesion - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment lesion**

## CodeSystem: Treatment lesion 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentLesion | *Version*:2.23.1 |
| Active as of 2022-09-19 | *Computable Name*:TreatmentLesion |

 
Treatment lesion 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BrusklaesionBehandlingDKRR](ValueSet-BrusklaesionBehandlingDKRR.md)
* [MenisklaesionBehandlingDKRR](ValueSet-MenisklaesionBehandlingDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentLesion",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentLesion",
  "version" : "2.23.1",
  "name" : "TreatmentLesion",
  "title" : "Treatment lesion",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Treatment lesion",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 8,
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
    "code" : "resection",
    "display" : "Resection",
    "definition" : "Resection / Resektion"
  },
  {
    "code" : "suture",
    "display" : "Suture",
    "definition" : "Suture / Sutur"
  },
  {
    "code" : "all_inside",
    "display" : "All inside",
    "definition" : "All inside"
  },
  {
    "code" : "debridement",
    "display" : "Debridement",
    "definition" : "Debridement"
  },
  {
    "code" : "microfracture",
    "display" : "Microfracture",
    "definition" : "Microfracture / Mikrofraktur"
  },
  {
    "code" : "mosaic_plastic",
    "display" : "Mosaic plastic",
    "definition" : "Mosaic plastic / Mosaikplastik"
  },
  {
    "code" : "synthetic_scaffold",
    "display" : "Synthetic scaffold",
    "definition" : "Synthetic scaffold / Syntetisk scaffold"
  },
  {
    "code" : "cell_transplantation",
    "display" : "Cell transplantation",
    "definition" : "Cell transplantation / Celletransplantation"
  }]
}

```

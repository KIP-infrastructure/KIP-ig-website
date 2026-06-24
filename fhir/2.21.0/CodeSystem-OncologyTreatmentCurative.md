# Oncology Treatment (curative) - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oncology Treatment (curative)**

## CodeSystem: Oncology Treatment (curative) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OncologyTreatmentCurative | *Version*:2.21.0 |
| Active as of 2022-04-28 | *Computable Name*:OncologyTreatmentCurative |

 
Types of oncology treatments for curative treatment intention 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OnkologibehandlingerKurativ](ValueSet-OnkologibehandlingerKurativ.md)
* [TreatmentTypeOncology](ValueSet-TreatmentTypeOncology.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "OncologyTreatmentCurative",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/OncologyTreatmentCurative",
  "version" : "2.21.0",
  "name" : "OncologyTreatmentCurative",
  "title" : "Oncology Treatment (curative)",
  "status" : "active",
  "date" : "2022-04-28T00:00:00+02:00",
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
  "description" : "Types of oncology treatments for curative treatment intention",
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
    "code" : "adjuvant",
    "display" : "Adjuverende behandling",
    "definition" : "Hvis Adjuverende behandling"
  },
  {
    "code" : "neoadjuvant",
    "display" : "Neo-adjuverende behandling",
    "definition" : "Hvis Neo-adjuverende behandling"
  },
  {
    "code" : "perioperative",
    "display" : "Perioperativ behandling",
    "definition" : "Hvis Perioperativ behandling"
  },
  {
    "code" : "radio/chemo",
    "display" : "Definitiv kemo/radioterapi behandling",
    "definition" : "Hvis Definitiv kemo/radioterapi behandling"
  }]
}

```

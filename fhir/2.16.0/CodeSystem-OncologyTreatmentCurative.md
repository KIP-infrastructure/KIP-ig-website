# Oncology Treatment (curative) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oncology Treatment (curative)**

## CodeSystem: Oncology Treatment (curative) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OncologyTreatmentCurative | *Version*:2.16.0 |
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
  "version" : "2.16.0",
  "name" : "OncologyTreatmentCurative",
  "title" : "Oncology Treatment (curative)",
  "status" : "active",
  "date" : "2022-04-28T00:00:00+02:00",
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
  "description" : "Types of oncology treatments for curative treatment intention",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
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
    }
  ]
}

```

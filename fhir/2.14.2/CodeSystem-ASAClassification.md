# ASA Physical Status Classification System - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ASA Physical Status Classification System**

## CodeSystem: ASA Physical Status Classification System 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ASAClassification | *Version*:2.14.2 |
| Active as of 2022-05-31 | *Computable Name*:ASAClassification |

 
Score udviklet til vurdering af det fysiske helbred. Link: https://www.asahq.org/standards-and-guidelines/asa-physical-status-classification-system 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ASAIVI](ValueSet-ASAIVI.md)
* [ASAIVIkort](ValueSet-ASAIVIkort.md)
* [AsaIV](ValueSet-AsaIV.md)
* [AsaIVkort](ValueSet-AsaIVkort.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ASAClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ASAClassification",
  "version" : "2.14.2",
  "name" : "ASAClassification",
  "title" : "ASA Physical Status Classification System",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Score udviklet til vurdering af det fysiske helbred. Link: https://www.asahq.org/standards-and-guidelines/asa-physical-status-classification-system",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "asai",
      "display" : "ASA I",
      "definition" : "A normal healthy patient"
    },
    {
      "code" : "asaii",
      "display" : "ASA II",
      "definition" : "A patient with mild systemic disease"
    },
    {
      "code" : "asaiii",
      "display" : "ASA III",
      "definition" : "A patient with severe systemic disease"
    },
    {
      "code" : "asaiv",
      "display" : "ASA IV",
      "definition" : "A patient with severe systemic disease that is a constant threat to life"
    },
    {
      "code" : "asav",
      "display" : "ASA V",
      "definition" : "A moribund patient who is not expected to survive without the operation"
    },
    {
      "code" : "asavi",
      "display" : "ASA VI",
      "definition" : "A declared brain-dead patient whose organs are being removed for donor purposes"
    }
  ]
}

```

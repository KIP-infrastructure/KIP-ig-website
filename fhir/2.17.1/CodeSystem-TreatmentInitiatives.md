# Treatment initiatives - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment initiatives**

## CodeSystem: Treatment initiatives 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentInitiatives | *Version*:2.17.1 |
| Active as of 2022-06-29 | *Computable Name*:TreatmentInitiatives |

 
Treatment initiatives 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HydrocephalusTiltag](ValueSet-HydrocephalusTiltag.md)
* [VasospasmerTiltag](ValueSet-VasospasmerTiltag.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentInitiatives",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentInitiatives",
  "version" : "2.17.1",
  "name" : "TreatmentInitiatives",
  "title" : "Treatment initiatives",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Treatment initiatives",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "oxygenmonitoring",
      "display" : "Iltmonitorering",
      "definition" : "Iltmonitorering"
    },
    {
      "code" : "hypertensiontreatment",
      "display" : "Hypertensionsbehandling",
      "definition" : "Hypertensionsbehandling"
    },
    {
      "code" : "endovascularmedical",
      "display" : "Endovaskulær medicinsk behandling",
      "definition" : "Endovaskulær medicinsk behandling"
    },
    {
      "code" : "endovascularmechanical",
      "display" : "Endovaskulær mekanisk behandling",
      "definition" : "Endovaskulær mekanisk behandling"
    },
    {
      "code" : "temporarydrain",
      "display" : "Midlertidigt dræn",
      "definition" : "Midlertidigt dræn"
    },
    {
      "code" : "permanentshunt",
      "display" : "Permanent shunt",
      "definition" : "Permanent shunt"
    }
  ]
}

```

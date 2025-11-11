# TreatmentIntention - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TreatmentIntention**

## CodeSystem: TreatmentIntention 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention | *Version*:2.13.0 |
| Active as of 2022-06-03 | *Computable Name*:TreatmentIntention |

 
Behandlingsintention for kræft databaserne 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ALDkemoterapi](ValueSet-ALDkemoterapi.md)
* [Behandlingsintention](ValueSet-Behandlingsintention.md)
* [Chemotherapy](ValueSet-Chemotherapy.md)
* [OnkologiBehandlingsintention](ValueSet-OnkologiBehandlingsintention.md)
* [OperativtSigteDCCG](ValueSet-OperativtSigteDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentIntention",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention",
  "version" : "2.13.0",
  "name" : "TreatmentIntention",
  "title" : "TreatmentIntention",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Behandlingsintention for kræft databaserne",
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "curative",
      "display" : "Kurativt",
      "definition" : "Kurativt intenderet",
      "concept" : [
        {
          "code" : "surgical/endoscopic",
          "display" : "Kirurgi/endoskopi",
          "definition" : "Kurativt intenderet, kirurgi/endoskopi"
        },
        {
          "code" : "oncological",
          "display" : "Onkologisk",
          "definition" : "Kurativt intenderet, definitiv onkologisk"
        }
      ]
    },
    {
      "code" : "palliative",
      "display" : "Palliativt",
      "definition" : "Palliativt intenderet"
    },
    {
      "code" : "compromised_resection",
      "display" : "Compromised resection",
      "definition" : "Compromised resection"
    },
    {
      "code" : "recidiv",
      "display" : "Recurrent",
      "definition" : "Recidiv"
    },
    {
      "code" : "semiintensiv",
      "display" : "Semiintensiv",
      "definition" : "Semiintensiv"
    },
    {
      "code" : "intensive",
      "display" : "Intensiv",
      "definition" : "Intensiv"
    }
  ]
}

```

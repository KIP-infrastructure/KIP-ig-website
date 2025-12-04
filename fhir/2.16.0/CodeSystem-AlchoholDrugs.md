# Alchohol or drugs - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alchohol or drugs**

## CodeSystem: Alchohol or drugs 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AlchoholDrugs | *Version*:2.16.0 |
| Active as of 2022-09-30 | *Computable Name*:AlchoholDrugs |

 
Alchohol or drugs 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PaavirkningPaagaaendeRETSPSYK](ValueSet-PaavirkningPaagaaendeRETSPSYK.md)
* [PaavirkningRETSPSYK](ValueSet-PaavirkningRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AlchoholDrugs",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AlchoholDrugs",
  "version" : "2.16.0",
  "name" : "AlchoholDrugs",
  "title" : "Alchohol or drugs",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Alchohol or drugs",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "alchohol",
      "display" : "Alchohol",
      "definition" : "Alchohol / Alkohol"
    },
    {
      "code" : "cannabis",
      "display" : "Cannabis",
      "definition" : "Cannabis"
    },
    {
      "code" : "central_stimulants",
      "display" : "Central stimulants",
      "definition" : "Central stimulants / Centralstimulerende stoffer"
    },
    {
      "code" : "opioids",
      "display" : "Opiods",
      "definition" : "Opioids / Opioider"
    },
    {
      "code" : "benzodiazepines",
      "display" : "Benzodiazepines",
      "definition" : "Benzodiazepines / Benzodiazepiner"
    },
    {
      "code" : "steroids",
      "display" : "Steroids",
      "definition" : "Steroids / Steroider"
    }
  ]
}

```

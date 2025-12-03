# AK Behandling (DKR) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AK Behandling (DKR)**

## CodeSystem: AK Behandling (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AKBehandling | *Version*:2.15.0 |
| Active as of 2023-12-18 | *Computable Name*:AKBehandling |

 
AK Behandling (DKR) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AKBehandlingDKR](ValueSet-AKBehandlingDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AKBehandling",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AKBehandling",
  "version" : "2.15.0",
  "name" : "AKBehandling",
  "title" : "AK Behandling (DKR)",
  "status" : "active",
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "AK Behandling (DKR)",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "clopidogrel",
      "display" : "Clopidogrel (fx Plavix), Ticagrelor (Brilique)",
      "definition" : "Clopidogrel (fx Plavix), Ticagrelor (Brilique)"
    },
    {
      "code" : "persantin",
      "display" : "Persantin",
      "definition" : "Persantin"
    },
    {
      "code" : "orisantin",
      "display" : "Orisantin (Asasantin)",
      "definition" : "Orisantin (Asasantin)"
    },
    {
      "code" : "acetylsalicylsyre",
      "display" : "Acetylsalicylsyre (fx Magnyl)",
      "definition" : "Acetylsalicylsyre (fx Magnyl)"
    },
    {
      "code" : "vitamin_k",
      "display" : "Vitamin-K antagonist (Ma-ravan, Warfarin, Marcoumar)",
      "definition" : "Vitamin-K antagonist (Ma-ravan, Warfarin, Marcoumar)"
    },
    {
      "code" : "noak",
      "display" : "NOAK (fx Xarelto, Pradaxa, Eliquis)",
      "definition" : "NOAK (fx Xarelto, Pradaxa, Eliquis)"
    }
  ]
}

```

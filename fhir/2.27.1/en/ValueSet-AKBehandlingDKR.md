# AK Behandling (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AK Behandling (DKR)**

## ValueSet: AK Behandling (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AKBehandlingDKR | *Version*:2.27.1 |
| Active as of 2022-10-13 | *Computable Name*:AKBehandlingDKR |

 
AK Behandling (DKR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "AKBehandlingDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AKBehandlingDKR",
  "version" : "2.27.1",
  "name" : "AKBehandlingDKR",
  "title" : "AK Behandling (DKR)",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "AK Behandling (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AKBehandling",
      "concept" : [{
        "code" : "clopidogrel",
        "display" : "Clopidogrel (fx Plavix), Ticagrelor (Brilique)"
      },
      {
        "code" : "persantin",
        "display" : "Persantin"
      },
      {
        "code" : "orisantin",
        "display" : "Orisantin (Asasantin)"
      },
      {
        "code" : "acetylsalicylsyre",
        "display" : "Acetylsalicylsyre (fx Magnyl)"
      },
      {
        "code" : "vitamin_k",
        "display" : "Vitamin-K antagonist (Ma-ravan, Warfarin, Marcoumar)"
      },
      {
        "code" : "noak",
        "display" : "NOAK (fx Xarelto, Pradaxa, Eliquis)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```

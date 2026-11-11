# Behandling (CML) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandling (CML)**

## ValueSet: Behandling (CML) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingCML | *Version*:2.27.2 |
| Active as of 2022-07-18 | *Computable Name*:BehandlingCML |

 
Behandling (CML) 

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
  "id" : "BehandlingCML",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingCML",
  "version" : "2.27.2",
  "name" : "BehandlingCML",
  "title" : "Behandling (CML)",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Behandling (CML)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "L01EA06",
        "display" : "Asciminib"
      },
      {
        "code" : "L01XX05",
        "display" : "Hydroxycarbamide"
      },
      {
        "code" : "L01EA01",
        "display" : "Imatinib"
      },
      {
        "code" : "L01EA02",
        "display" : "Dasatinib"
      },
      {
        "code" : "L01EA03",
        "display" : "Nilotinib"
      },
      {
        "code" : "L03AB",
        "display" : "Interferon"
      },
      {
        "code" : "L01EA04",
        "display" : "Bosutinib"
      },
      {
        "code" : "L01EA05",
        "display" : "Ponatinib"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATCMixedCodes",
      "concept" : [{
        "code" : "tki",
        "display" : "Anden TKI behandling"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden behandling"
      }]
    }]
  }
}

```

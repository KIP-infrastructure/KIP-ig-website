# Neoadjuverende behandling DCCG - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Neoadjuverende behandling DCCG**

## ValueSet: Neoadjuverende behandling DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NeoadjuverendeBehandling | *Version*:2.27.2 |
| Active as of 2022-09-07 | *Computable Name*:NeoadjuverendeBehandling |

 
Neoadjuverende behandling DCCG 

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
  "id" : "NeoadjuverendeBehandling",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NeoadjuverendeBehandling",
  "version" : "2.27.2",
  "name" : "NeoadjuverendeBehandling",
  "title" : "Neoadjuverende behandling DCCG",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Neoadjuverende behandling DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType",
      "concept" : [{
        "code" : "radiotherapy",
        "display" : "Strålebehandling"
      },
      {
        "code" : "chemotherapy",
        "display" : "Kemoterapi"
      },
      {
        "code" : "chemoradiationtherapy",
        "display" : "Kemostråleterapi"
      },
      {
        "code" : "immunotherapy",
        "display" : "Immunterapi"
      },
      {
        "code" : "uns",
        "display" : "UNS"
      }]
    }]
  }
}

```

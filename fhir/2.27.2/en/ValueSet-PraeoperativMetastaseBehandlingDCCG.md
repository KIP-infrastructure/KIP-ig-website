# Præoperativ Metastasebehandling (DCCG) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Præoperativ Metastasebehandling (DCCG)**

## ValueSet: Præoperativ Metastasebehandling (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PraeoperativMetastaseBehandlingDCCG | *Version*:2.27.2 |
| Active as of 2022-11-09 | *Computable Name*:PraeoperativMetastaseBehandlingDCCG |

 
Præoperativ Metastasebehandling (DCCG) 

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
  "id" : "PraeoperativMetastaseBehandlingDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PraeoperativMetastaseBehandlingDCCG",
  "version" : "2.27.2",
  "name" : "PraeoperativMetastaseBehandlingDCCG",
  "title" : "Præoperativ Metastasebehandling (DCCG)",
  "status" : "active",
  "date" : "2022-11-09T00:00:00+02:00",
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
  "description" : "Præoperativ Metastasebehandling (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T000607",
        "display" : "Lever"
      },
      {
        "code" : "T000398",
        "display" : "Lunge"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet sted"
      }]
    }]
  }
}

```

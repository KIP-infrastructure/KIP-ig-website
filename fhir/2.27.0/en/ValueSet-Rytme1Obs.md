# Hjerterytme - første obs - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjerterytme - første obs**

## ValueSet: Hjerterytme - første obs 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Rytme1Obs | *Version*:2.27.0 |
| Active as of 2022-06-29 | *Computable Name*:Rytme1Obs |

 
Første observerede hjerterytme 

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
  "id" : "Rytme1Obs",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Rytme1Obs",
  "version" : "2.27.0",
  "name" : "Rytme1Obs",
  "title" : "Hjerterytme - første obs",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Første observerede hjerterytme",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Rytme1Obs",
      "concept" : [{
        "code" : "vf",
        "display" : "VF"
      },
      {
        "code" : "pulslos_vt",
        "display" : "Pulsløs VT"
      },
      {
        "code" : "pea",
        "display" : "PEA"
      },
      {
        "code" : "asystoli",
        "display" : "Asystoli"
      },
      {
        "code" : "ingen_man",
        "display" : "Ingen manuel rytmeanalyse"
      },
      {
        "code" : "pulsgiv",
        "display" : "Pulsgivende"
      }]
    }]
  }
}

```

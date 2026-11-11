# Immunoterapi - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Immunoterapi**

## ValueSet: Immunoterapi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Immunoterapi | *Version*:2.27.2 |
| Active as of 2022-07-18 | *Computable Name*:Immunoterapi |

 
Immunoterapi 

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
  "id" : "Immunoterapi",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Immunoterapi",
  "version" : "2.27.2",
  "name" : "Immunoterapi",
  "title" : "Immunoterapi",
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
  "description" : "Immunoterapi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen immunoterapi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "L01FA01",
        "display" : "Rituximab"
      },
      {
        "code" : "L01FA03",
        "display" : "Obinutuzumab"
      },
      {
        "code" : "L01FA02",
        "display" : "Ofatumumab"
      },
      {
        "code" : "L04AA",
        "display" : "MabCampath"
      },
      {
        "code" : "L01FX05",
        "display" : "Brentuximab vedotin (Adcetris)"
      },
      {
        "code" : "L01FX14",
        "display" : "Polatuzumab incl evt. Rituximab"
      },
      {
        "code" : "L01FF",
        "display" : "PD(L)1 hæmmere"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentUnspecified",
      "concept" : [{
        "code" : "glofitamab",
        "display" : "Glofitamabel Epcoritamab Incl evt. Rituximab"
      }]
    }]
  }
}

```

# Clavien komplikationsgrad - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clavien komplikationsgrad**

## ValueSet: Clavien komplikationsgrad 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ClavienKomplikationsgrad | *Version*:2.27.3 |
| Active as of 2022-10-04 | *Computable Name*:ClavienKomplikationsgrad |

 
Clavien komplikationsgrad 

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
  "id" : "ClavienKomplikationsgrad",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ClavienKomplikationsgrad",
  "version" : "2.27.3",
  "name" : "ClavienKomplikationsgrad",
  "title" : "Clavien komplikationsgrad",
  "status" : "active",
  "date" : "2022-10-04T00:00:00+02:00",
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
  "description" : "Clavien komplikationsgrad",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "ZDA03A1",
        "display" : "Clavien grad 1"
      },
      {
        "code" : "ZDA03A2",
        "display" : "Clavien grad 2"
      },
      {
        "code" : "ZDA03A3",
        "display" : "Clavien grad 3"
      },
      {
        "code" : "ZDA03A3A",
        "display" : "Clavien grad 3a"
      },
      {
        "code" : "ZDA03A3B",
        "display" : "Clavien grad 3b"
      },
      {
        "code" : "ZDA03A4",
        "display" : "Clavien grad 4"
      },
      {
        "code" : "ZDA03A4A",
        "display" : "Clavien grad 4a"
      },
      {
        "code" : "ZDA03A4B",
        "display" : "Clavien grad 4b"
      },
      {
        "code" : "ZDA03A5",
        "display" : "Clavien grad 5"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      }]
    }]
  }
}

```

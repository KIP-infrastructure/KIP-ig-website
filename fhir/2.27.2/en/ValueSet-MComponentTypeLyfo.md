# M komponent (Myeloma protein) type - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **M komponent (Myeloma protein) type**

## ValueSet: M komponent (Myeloma protein) type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MComponentTypeLyfo | *Version*:2.27.2 |
| Active as of 2022-06-08 | *Computable Name*:MComponentTypeLyfo |

 
M komponent (Myeloma protein) type [LYFO] 

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
  "id" : "MComponentTypeLyfo",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MComponentTypeLyfo",
  "version" : "2.27.2",
  "name" : "MComponentTypeLyfo",
  "title" : "M komponent (Myeloma protein) type",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "M komponent (Myeloma protein) type [LYFO]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MComponentType",
      "concept" : [{
        "code" : "iga",
        "display" : "Iga"
      },
      {
        "code" : "igg",
        "display" : "IgG"
      },
      {
        "code" : "igm",
        "display" : "IgM"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst"
      }]
    }]
  }
}

```

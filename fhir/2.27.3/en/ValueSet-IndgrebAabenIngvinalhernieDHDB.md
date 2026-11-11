# Indgreb, åben uden mesh - ingvinalhernie (DHDB) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb, åben uden mesh - ingvinalhernie (DHDB)**

## ValueSet: Indgreb, åben uden mesh - ingvinalhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebAabenIngvinalhernieDHDB | *Version*:2.27.3 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebAabenIngvinalhernieDHDB |

 
Indgreb, åben uden mesh - ingvinalhernie (DHDB) 

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
  "id" : "IndgrebAabenIngvinalhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebAabenIngvinalhernieDHDB",
  "version" : "2.27.3",
  "name" : "IndgrebAabenIngvinalhernieDHDB",
  "title" : "Indgreb, åben uden mesh - ingvinalhernie (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Indgreb, åben uden mesh - ingvinalhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "anuloraphi",
        "display" : "Anuloraphi (alene)"
      },
      {
        "code" : "mcvay",
        "display" : "McVay"
      },
      {
        "code" : "bassini",
        "display" : "Bassini"
      },
      {
        "code" : "shouldice",
        "display" : "Shouldice"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Øvrige åben uden mesh"
      }]
    }]
  }
}

```

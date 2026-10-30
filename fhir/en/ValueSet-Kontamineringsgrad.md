# Kontamineringsgrad - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kontamineringsgrad**

## ValueSet: Kontamineringsgrad 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Kontamineringsgrad | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:Kontamineringsgrad |

 
Kontamineringsgrad 

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
  "id" : "Kontamineringsgrad",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Kontamineringsgrad",
  "version" : "2.27.1",
  "name" : "Kontamineringsgrad",
  "title" : "Kontamineringsgrad",
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
  "description" : "Kontamineringsgrad",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ContaminationDegree",
      "concept" : [{
        "code" : "clean",
        "display" : "Ren"
      },
      {
        "code" : "potentially_contaminated",
        "display" : "Potentielt kontamineret"
      },
      {
        "code" : "contaminated",
        "display" : "Kontamineret"
      },
      {
        "code" : "dirty",
        "display" : "Snavset"
      }]
    }]
  }
}

```

# Relationen til doner - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Relationen til doner**

## ValueSet: Relationen til doner 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DonorRelationship | *Version*:2.27.1 |
| Active as of 2022-07-13 | *Computable Name*:DonorRelationship |

 
Familie relation til donor 

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
  "id" : "DonorRelationship",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DonorRelationship",
  "version" : "2.27.1",
  "name" : "DonorRelationship",
  "title" : "Relationen til doner",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Familie relation til donor",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SNOMEDCT",
      "concept" : [{
        "code" : "303071001",
        "display" : "Familiedonor"
      },
      {
        "code" : "11286003",
        "display" : "Tvilling"
      },
      {
        "code" : "394863008",
        "display" : "Ubeslægtet"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uvist"
      }]
    }]
  }
}

```

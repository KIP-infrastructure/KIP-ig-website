# Relationen til donor (DNSL) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Relationen til donor (DNSL)**

## ValueSet: Relationen til donor (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DonorRelationDNSL | *Version*:2.27.2 |
| Active as of 2024-10-01 | *Computable Name*:DonorRelationDNSL |

 
Familie relation til donor (DNSL) 

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
  "id" : "DonorRelationDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DonorRelationDNSL",
  "version" : "2.27.2",
  "name" : "DonorRelationDNSL",
  "title" : "Relationen til donor (DNSL)",
  "status" : "active",
  "date" : "2024-10-01T00:00:00+02:00",
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
  "description" : "Familie relation til donor (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SNOMEDCT",
      "concept" : [{
        "code" : "40683002",
        "display" : "Forælder"
      },
      {
        "code" : "375005",
        "display" : "Søster/Bror"
      },
      {
        "code" : "10896006",
        "display" : "Tvilling (monozygot)"
      },
      {
        "code" : "713369009",
        "display" : "Anden levende familiedonor"
      },
      {
        "code" : "394863008",
        "display" : "Levende non-related donor"
      },
      {
        "code" : "713183000",
        "display" : "Nekronyre"
      },
      {
        "code" : "105457003",
        "display" : "Afdød"
      }]
    }]
  }
}

```

# Operativt fund - ingvinalhernie (DHDB) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operativt fund - ingvinalhernie (DHDB)**

## ValueSet: Operativt fund - ingvinalhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperativtFundIngvinalhernieDHDB | *Version*:2.27.2 |
| Active as of 2022-07-20 | *Computable Name*:OperativtFundIngvinalhernieDHDB |

 
Operativt fund - ingvinalhernie (DHDB) 

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
  "id" : "OperativtFundIngvinalhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperativtFundIngvinalhernieDHDB",
  "version" : "2.27.2",
  "name" : "OperativtFundIngvinalhernieDHDB",
  "title" : "Operativt fund - ingvinalhernie (DHDB)",
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
  "description" : "Operativt fund - ingvinalhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "DK40",
        "display" : "Ingvinalhernie"
      },
      {
        "code" : "DK41",
        "display" : "Femoralhernie"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "combined",
        "display" : "Kombination (ingvinal/femoral)"
      }]
    }]
  }
}

```

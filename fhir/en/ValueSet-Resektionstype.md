# Resektionstype - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resektionstype**

## ValueSet: Resektionstype 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Resektionstype | *Version*:2.27.1 |
| Active as of 2022-06-08 | *Computable Name*:Resektionstype |

 
Resektionstype for kræft databaser (DEGC) 

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
  "id" : "Resektionstype",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Resektionstype",
  "version" : "2.27.1",
  "name" : "Resektionstype",
  "title" : "Resektionstype",
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
  "description" : "Resektionstype for kræft databaser (DEGC)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ResectionType",
      "concept" : [{
        "code" : "gastrectomy",
        "display" : "Gastrektomi og øsofagojejunostomi (Roux) [KJDD00]"
      },
      {
        "code" : "ventricular",
        "display" : "Ventrikelresektion med gastrojejunostomi [KJDC20/KJCD30]"
      },
      {
        "code" : "transthoracic_ventricular",
        "display" : "Transtorakal øsofagustresektion og ventrikelresektion med øsofagogastrostomi [KJCC10/KJCC11]"
      },
      {
        "code" : "transhiatal_ventricular",
        "display" : "Transhiatal øsofagusresektion og ventrikelresektion med øsofagogastrostomi [KJCC00/KJDC40]"
      },
      {
        "code" : "transthoracic_intestine",
        "display" : "Transtorakal øsofagusresektion med interposition af tarm [KJCC30]"
      },
      {
        "code" : "transhiatal_intestine",
        "display" : "Transhiatal øsofagusresektion med interposition af tarm [KJCC20]"
      },
      {
        "code" : "endoscopic",
        "display" : "Endoskopisk [KJCA52/KJCA52A/KJCA52B/KJCA52C]"
      },
      {
        "code" : "otheresophagus",
        "display" : "Anden resektion af øsofagus med rekonstruktion med frit transplantat"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```

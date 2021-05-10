-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10-Maio-2021 às 03:03
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `newsenac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES
(1, 'Tecnologia'),
(2, 'Brasil'),
(3, 'Mundo'),
(4, 'Ciência'),
(5, 'Negócios'),
(6, 'Entretenimento'),
(7, 'Local'),
(8, 'Saúde'),
(9, 'Esportes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `data` date NOT NULL,
  `texto` text NOT NULL,
  `resumo` mediumtext NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `categoria_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id_news`, `titulo`, `foto`, `data`, `texto`, `resumo`, `usuario_id_usuario`, `categoria_id_categoria`) VALUES
(3, '4 erros comuns que fazem empresas perder dinheiro na área de TI', 'default.jpg', '2019-03-21', 'Muitas empresas subestimam o poder e o impacto financeiro que o mau uso da tecnologia pode causar em seu cotidiano. Fatores importantes não são levados em consideração quando o tema é discutido, como eficiência e risco, por exemplo, por serem muito difíceis de calcular, em virtude de sua intangibilidade.\r\n\r\nO risco gerado por falta de processos e metodologias pode aumentar a tendência de erros humanos, atrasando pagamentos, provocando perda de receitas e causando impactos negativos à imagem da empresa.\r\n\r\nA automatização de processos com o uso de ferramentas inteligentes, controle adequado da infraestrutura e ação antecipada para resolver os problemas de TI tem potencial de melhorar em até 40% a eficiência operacional de uma empresa.\r\n\r\nVeja abaixo alguns dos erros mais comuns cometidos pelas empresas, e como podemos resolver essas situações em prol da produtividade das companhias:\r\n\r\nErro 1: não manter um ciclo de troca de computadores saudável\r\n\r\nMuitas vezes, os colaboradores de uma empresa perdem muito tempo útil lidando com planilhas que não carregam, páginas que não abrem, sistemas que não funcionam e computadores com problemas recorrentes. Erros ocasionados por equipamentos obsoletos e aumento do custo de manutenção necessário para corrigir as falhas são frequentes.\r\n\r\n\r\nTendências\r\nCIO assume o papel de cocriador de negócios, diz Deloitte\r\n\r\nMuitas empresas convivem com uma falsa sensação de economia por não fazerem o investimento na troca de máquinas e softwares, o que é uma ilusão, considerando os custos provenientes de manutenção e do tempo de produtividade perdido.\r\n\r\nAtualmente, as organizações podem remediar isso com uma solução chamada “desktop as a service” (máquina como serviço), na qual empresas alugam equipamentos por um valor fixo mensal, já com softwares básicos instalados, e oferecem um serviço de manutenção de campo com extensão em todo território brasileiro. Em alguns casos, a economia pelo uso desses serviços chega a 11%, em comparação com o custo dos ativos comprados pelas próprias empresas.\r\n\r\nErro 2: não fazer a gestão da informação adequada\r\n\r\nInformação é poder. Algumas organizações acreditam que o conhecimento adquirido em TI não é relevante, porque nunca perceberam ou quantificaram os problemas recorrentes dentro da organização e o prejuízo para o negócio que o atraso em sua resolução ocasiona.\r\n\r\nÉ comum equipes de TI encontrarem soluções para problemas complexos e não fazerem o registro adequado desse conhecimento e das lições aprendidas em ferramentas que auxiliem na busca por essa informação rapidamente.\r\n\r\nO uso de melhores práticas como ITIL e de ferramentas de ITSM (Gestão de Chamados e Conhecimento) eleva as chances de redução de tempo na resolução de problemas, aumentando a experiência do usuário e, principalmente, o impacto no negócio.\r\n\r\nErro 3: não avaliar os benefícios que produtos na nuvem podem trazer\r\n\r\nCusto de aluguel de data center, atualizações de software, renovações de licenças, arquitetura pobre e ineficiente geram diversos problemas para uma organização, tais como alto custo de infraestrutura com aplicações instaladas localmente, tempo de inatividade excessivo de aplicativos, baixa performance e demora no tempo de resposta de TI para a ativação de um serviço.\r\n\r\n\r\nGestão\r\nShadow IT ocorre mais por voluntarismo do que por indisciplina\r\n\r\nO uso de produtos em nuvem auxilia as empresas a obter serviços “on demand”, que podem ser pagos conforme o uso. Existem vários provedores confiáveis no mercado, que tornaram o uso da nuvem essencial para a diminuição de custos desnecessários com infraestrutura ociosa, bem como rápida habilitação de serviços, mediante provisionamento quase instantâneo de hardware, diminuindo a burocracia e, principalmente, oferecendo acesso a tecnologia de ponta.\r\n\r\nNão é recomendado, porém, migrar para a nuvem sem fazer um planejamento estratégico, muito menos sem o apoio de uma consultoria especializada. Além disso, é importante sempre monitorar as informações salvas na nuvem. Busque uma consultoria que o ajudará nessa jornada e comece fazendo uma PoC (prova de conceito) em algum sistema específico. Muitas empresas oferecem créditos gratuitos para você testar o produto e para sua utilização. Dessa forma, a mudança é consciente, organizada e segura.\r\n\r\nErro 4: não investir em capacitação profissional\r\n\r\nCada vez mais as empresas dependem de projetos de tecnologia a fim de viabilizar produtos e serviços para o mercado. É comum em algumas organizações que a área de TI não seja vista como prioridade, mesmo sabendo de sua dependência e vulnerabilidade. Problemas são resolvidos no improviso, acarretando projetos que nunca acabam, áreas com mais pessoas do que o necessário, falta de informação para um análise estratégica, usuários insatisfeitos com o suporte e reclamações constantes do negócio.\r\n\r\nAlém da preocupação com sistemas e boas ferramentas de trabalho, é extremamente necessário o investimento em capacitação profissional para seus colaboradores.\r\n\r\nCoaching e treinamentos adicionais e de soft skills podem ajudar a abrir os horizontes e trazer novas técnicas para a gestão. Além disso, é preciso investir nos profissionais, já que as empresas precisam de líderes com múltiplos conhecimentos, e não somente capacitação técnica. São também necessárias habilidades de gerenciamento de equipes, gestão de riscos, gestão de custos, entre outras. Pessoas, processos e tecnologia precisam andar juntos para um bom desempenho e uso do dinheiro. Dessa forma as empresas se manterão atualizadas, com boa gestão de custo e eficientes.\r\n\r\n \r\n\r\n(*) Juliana Almeida é responsável pela prática de CIS (Cognizant Insfrastructure Services) na Cognizant', 'Muitas empresas subestimam o poder e o impacto financeiro que o mau uso da tecnologia pode causar em seu cotidiano.', 1, 1),
(4, 'Aprovação de Bolsonaro cai 15 pontos e é a pior da série histórica do Ibope', 'default.jpg', '2019-03-21', 'Os três primeiros meses do Governo Jair Bolsonaro não parecem muito animadores, a julgar pelos números da pesquisa Ibope divulgada nesta quarta-feira. O levantamento realizado de 16 a 19 deste mês mostra uma queda de 15 pontos percentuais na avaliação de \"ótimo ou bom\", que foi dos 49% aferidos em janeiro para 34%. A aprovação é a pior para um presidente da República em primeiro mandato desde Fernando Henrique Cardoso, de acordo com os números do próprio Ibope.\r\n\r\nA comparação com os antecessores no Palácio do Planalto não é alvissareira para o presidente. A esta altura de seu primeiro Governo, Fernando Henrique Cardoso contava com 41% de avaliação \"ótima ou boa\", enquanto Luiz Inácio Lula da Silva tinha 51% e Dilma Rousseff, 56%. Os 34% de Bolsonaro só são melhores do que os índices dos segundos mandatos de FHC, 22%, e de Dilma, 12%, quando ambos já tinham passado por quatro anos de desgaste em seus seus primeiros mandatos.\r\n\r\nQuando a pergunta é a sobre \"a forma como Bolsonaro está governando o país\", o levantamento indica que 51% dos brasileiros a aprovam, enquanto 38% desaprovam e 10% não sabem ou preferem não opinar. Apesar de maior do que a aprovação pessoal do presidente, esse índice também registrou queda desde janeiro, quando 67% aprovavam a forma do presidente de governar. Outro índice que caiu desde o início do Governo é o de confiança em Bolsonaro: foi de 62% de confiança para 49%.\r\n\r\nA maior queda de prestígio do presidente foi registrada na região Nordeste, onde a queda da avaliação \"ótimo ou bom\" do Governo caiu 19 pontos, de 42% para 23% — é nessa região também que se concentra a maior desaprovação sobre a forma de Bolsonaro governar, de 49%. A segunda queda mais expressiva foi entre os brasileiros com renda familiar entre dois e cinco salários mínimos, que apresentou recuo de 18 pontos, de 53% em janeiro para 35% agora.\r\n\r\nDurante os três primeiros meses de Governo, Bolsonaro estipulou a reforma da Previdência como prioridade na agenda do Congresso Nacional, mas frequentou o noticiário mais por conta de suas postagens no Twitter do que propriamente por conta de medidas de Governo. Ele também dividiu as atenções com ministros como Paulo Guedes, da Economia, e Sérgio Moro, da Segurança Pública, e teve a imagem desgastada pela investigação do caso Fabrício Queiroz e pela demissão tumultuada de Gustavo Bebianno da Secretaria-Geral da Presidência, entre outras batidas de cabeça, como a que levou a trocas no Ministério da Educação.\r\n\r\nO segmento que mais confia em Bolsonaro, segundo o Ibope, é o dos evangélicos: 56%. São eles também que mais aprovam a maneira de Bolsonaro governar (61%). \"A avaliação positiva também é mais alta entre os que se autodeclaram como brancos (42%) — mesmo percentual que tem entre os que vivem nas regiões Norte/Centro-Oeste — único segmento em que Bolsonaro se recupera em relação a fevereiro\", registra o instituto.', 'Pesquisa aponta 34% de avaliação positiva, menos que FHC, Lula e Dilma em primeiro mandato', 1, 2),
(6, 'A incerteza do Brexit mergulha o Reino Unido em uma crise política e constitucional', 'default.jpg', '2019-03-21', 'Theresa May manteve nesta terça-feira o rosto de uma esfinge silenciosa enquanto seus ministros se esfolavam, como disseram à imprensa testemunhas da reunião. O golpe fatal dado pelo presidente do Parlamento, John Bercow, ao proibir uma terceira votação do plano do Brexit se não houver \"alterações substanciais\" no texto, causou alvoroço entre os eurocéticos e a debandada dos indecisos. May vai pedir a Bruxelas uma prorrogação, mas nem ela tem claro por quanto tempo nem a UE qual a finalidade do pedido.\r\n\r\nA primeira-ministra, de acordo com os presentes, queria revidar o golpe de Bercow e enfatizou ao gabinete que o Parlamento se tornou \"alvo de chacota dos cidadãos\". May se limitou a alertá-los que \"se não forem capazes de cumprir com o Brexit, as pessoas nunca perdoarão\", mas foi incapaz de dar pistas sobre o caminho que planeja tomar, a pouco mais de dez dias do 29 de março, a data oficialmente definida para a saída do Reino Unido da UE.\r\n\r\nMAIS INFORMAÇÕES\r\nA incerteza do Brexit mergulha o Reino Unido em uma crise política e constitucional Parlamento britânico aprova adiar Brexit e rejeita um novo referendo\r\nA incerteza do Brexit mergulha o Reino Unido em uma crise política e constitucional Trabalhistas britânicos apoiam novo referendo sobre o Brexit\r\nA incerteza do Brexit mergulha o Reino Unido em uma crise política e constitucional A fatura de um Brexit sem acordo: de aeroportos paralisados à falta de comida\r\nOs membros do Governo se envolveram em uma discussão, aparentemente sobre a estratégia a seguir, mas que à medida que o tom subia trazia à tona as profundas divisões internas. Enquanto alguns argumentavam que a ameaça de um Brexit sem acordo a partir de 30 de junho – data final  da prorrogação que May se comprometeu a pedir à UE – seria suficiente para convencer os indecisos, outros eram partidários de uma extensão mais longa, o que deixou os eurocéticos nervosos. \"Este era o Governo que iria alcançar o Brexit, e pelo que escuto, não parece mais isso\", criticou Andrea Leadsom, a líder conservadora da Câmara dos Comuns.\r\n\r\nO Executivo de May endossou as palavras do procurador-geral do Estado, Robert Buckland, que depois de ouvir a decisão do presidente do Parlamento afirmou que o Reino Unido estava \"no meio de uma crise constitucional, uma crise política que somos obrigados a resolver para o bem do país\". No entanto, o Governo sugeriu nas últimas horas que existem maneiras de contornar a decisão do presidente, e que sua intenção ainda é submeter o plano de May a uma terceira votação. \"É o único plano na mesa. A UE deixou isso claro. As empresas precisam da certeza que oferece\", disse Stephen Barclay, o ministro para o Brexit, nesta terça-feira.\r\n\r\nOs 27 parceiros da UE analisaram nesta terça à tarde em Bruxelas os preparativos para uma possível prorrogação do Brexit, apesar de ainda não haver detalhes sobre o pedido de Londres. O negociador europeu do Brexit, Michel Barnier, recomendou aos membros da UE que avaliassem a ideia com muito cuidado. \"Uma extensão também é uma extensão da incerteza. E é algo que pode ter muitíssimas consequências\", alertou.\r\n\r\nA mensagem será levada à cúpula europeia desta quinta e sexta-feira em Bruxelas, na qual os 27 pretendem se pronunciar sobre o possível adiamento do Brexit. No entanto, a decisão do presidente do Parlamento Britânico de impedir uma terceira votação do acordo de saída pode prejudicar os planos da União Europeia. Bruxelas esperava que o governo de Theresa May apresentasse esta semana um pedido de adiamento do Brexit, pelo menos até junho, para concluir a tramitação do Acordo. E a aprovação dessa prorrogação poderia se dar na cúpula. Mas o novo tropeço de May em Westminster deixa todo o calendário no ar e a aprovação definitiva da extensão (ou sua improvável rejeição) poderia não acontecer até a próxima semana, a apenas algumas horas do prazo para o Brexit expirar. \"Podemos aprová-la até uma hora antes da meia-noite de 29 de março\", diz uma fonte do bloco europeu, referindo-se à data prevista para consumar a saída do Reino Unido da UE.\r\n\r\nBruxelas não descarta a possibilidade de que, após a cúpula europeia, May volte a tentar a aprovação do acordo na próxima semana. Se conseguisse fazer o texto avançar no Parlamento, a prorrogação poderia ser de apenas três meses. Mas se fracassasse novamente, a UE poderia considerar um adiamento do Brexit até 2020. Vários países, com a França e a Espanha na liderança, estão muito relutantes em prolongar a incerteza por tanto tempo.', 'UE deve decidir nos próximos dias se aceita adiar o prazo do Brexit', 1, 3),
(7, '\r\nBNDES pode devolver R$ 126 bi à União em 2019', 'default.jpg', '2019-03-21', 'O Banco Nacional do Desenvolvimento Econômico e Social (BNDES) tem condições de devolver R$ 126 bilhões na íntegra à União em 2019.\r\n\r\nA avaliação foi feita pelo secretário especial de Fazenda do Ministério da Economia, Waldery Rodrigues Júnior. O ofício com o pedido já foi encaminhado ao presidente do banco, Joaquim Levy.\r\n\r\nNa primeira entrevista no cargo, Waldery afirma que é preciso destravar o canal de crédito no Brasil e garantir uma maior participação do setor privado.\r\n\r\n“Mandamos ofício com a solicitação de devolução antecipada de R$100 bilhões, além dos R$ 26 bilhões já previstos para o ano. Como o ministro Paulo Guedes falou, tem que ‘despedalar’ o BNDES”, disse o secretário.', 'BNDES pode retornar para os cofres da União os bilhões que foram emprestados na forma de subsídios.', 1, 5),
(8, 'Banco Central mantém juros básicos no menor nível da história', 'default.jpg', '2019-03-21', '\r\nPela oitava vez seguida, o Banco Central (BC) não alterou os juros básicos da economia. Por unanimidade, o Comitê de Política Monetária (Copom) manteve a taxa Selic em 6,5% ao ano, na primeira reunião do órgão sob o comando do novo presidente do BC, Roberto Campos Neto. A decisão era esperada pelos analistas financeiros.\r\n\r\nCom a decisão de hoje, a Selic continua no menor nível desde o início da série histórica do Banco Central, em 1986. De outubro de 2012 a abril de 2013, a taxa foi mantida em 7,25% ao ano e passou a ser reajustada gradualmente até alcançar 14,25% ao ano em julho de 2015. Em outubro de 2016, o Copom voltou a reduzir os juros básicos da economia até que a taxa chegasse a 6,5% ao ano em março de 2018.\r\n\r\nA Selic é o principal instrumento do Banco Central para manter sob controle a inflação oficial, medida pelo Índice Nacional de Preços ao Consumidor Amplo (IPCA). Em fevereiro, o indicador fechou em 3,89% no acumulado de 12 meses. O índice subiu em relação a janeiro, pressionado por alimentos e educação. A IPCA de março só será divulgado em 10 de abril.\r\n\r\nPara 2019, o Conselho Monetário Nacional (CMN) estabeleceu meta de inflação de 4,25%, com margem de tolerância de 1,5 ponto percentual. O IPCA, portanto, não poderá superar 5,75% neste ano nem ficar abaixo de 2,75%. A meta para 2020 foi fixada em 4%, também com intervalo de tolerância de 1,5 ponto percentual.\r\n\r\nInflação\r\nNo Relatório de Inflação divulgado no fim de dezembro pelo Banco Central, a autoridade monetária estima que o IPCA encerrará 2019 em 4% e continuará baixo até 2021. De acordo com o boletim Focus, pesquisa semanal com instituições financeiras divulgada pelo BC, a inflação oficial deverá fechar o ano em 3,89%.\r\n\r\nDepois de fechar abaixo do piso da meta em 2017, a inflação subiu no ano passado afetada pela greve dos caminhoneiros, que durou 11 dias e provocou desabastecimento de alguns produtos no mercado, e por causa da alta do dólar no período. Mesmo assim, o IPCA voltou a registrar níveis baixos nos últimos meses de 2018, tendo encerrado o ano em 3,75%.\r\n\r\nCrédito mais barato\r\nA redução da taxa Selic estimula a economia porque juros menores barateiam o crédito e incentivam a produção e o consumo em um cenário de baixa atividade econômica. No último Relatório de Inflação, o BC projetava expansão da economia de 2,4% para este ano. Segundo o boletim Focus, os analistas econômicos preveem crescimento de 2,28% do Produto Interno Bruto (PIB, soma dos bens e serviços produzidos pelo país) em 2019.\r\n\r\nA taxa básica de juros é usada nas negociações de títulos públicos no Sistema Especial de Liquidação e Custódia (Selic) e serve de referência para as demais taxas de juros da economia. Ao reajustá-la para cima, o Banco Central segura o excesso de demanda que pressiona os preços, porque juros mais altos encarecem o crédito e estimulam a poupança. Ao reduzir os juros básicos, o Copom barateia o crédito e incentiva a produção e o consumo, mas enfraquece o controle da inflação. Para cortar a Selic, a autoridade monetária precisa estar segura de que os preços estão sob controle e não correm risco de subir.', 'Foi primeira reunião do Copom comandada por Campos Neto', 1, 5),
(10, 'Alerta para os pais! \'Momo\' aparece em vídeos infantis com desafios de suicídio', 'default.jpg', '2019-03-21', 'Imagens aleatórias da Momo estão aparecendo em vídeos infantis populares na internet. Nos vídeos, a personagem interrompe a exibição com mensagens assustadoras, como por exemplo, como uma criança deve fazer para se suicidar. A informação foi publicada na última sexta-feira (15) na revista Crescer.\r\n\r\nMomo foi criada a partir de uma escultura de um artista plástico japonês. A personagem tem olhos esbugalhados, pele pálida, sorriso estranho e ficou conhecida depois que um vídeo chamado “Desafio Momo” viralizou na internet em 2018.\r\n\r\nO \'\'Desafio Momo\'\' envolvia roubo de informações pessoais, incitação ao suicídio e extorsão.\r\n\r\nA reportagem da revista Crescer relatou o caso de um vídeo popular na internet de uma criança brincando de slime que é interrompido, após poucos segundos do início da sua exibição, com imagens da Momo ensinando o passo a passo de como cortar os pulsos, em inglês.\r\n\r\nOs pais entrevistados na matéria afirmam ter recebido o vídeo por meio de um grupo do WhastApp. Ao conversarem com a filha de oito anos sobre o assunto, descobriram que ela já havia assistido à cena cerca de três vezes e estava muito assustada, inclusive com medo de dormir sozinha.\r\n\r\nOs pais afirmaram à reportagem que haviam colocado filtro no YouTube, restringindo o acesso da filha ao conteúdo do YouTube Kids.\r\n\r\nA Crescer publicou uma carta do YouTube, que se manifestou sobre o assunto:\r\n\r\n\"Muitos de vocês compartilharam suas preocupações conosco nos últimos dias sobre o Desafio Momo — prestamos muita atenção nisso\'\', afirma a plataforma.\r\n\r\nDepois de muita análise, não vimos nenhuma evidência recente de vídeos promovendo o \'\'Desafio Momo\'\' na plataforma. Vídeos incentivando desafios prejudiciais e perigosos são claramente contra nossas políticas, incluindo o \'\'Desafio Momo\'\'. Apesar dos relatos da imprensa sobre esse desafio, não tivemos links recentes sinalizados ou compartilhados conosco do YouTube que violem nossas Diretrizes da comunidade. É importante notar que permitimos que os criadores discutam, denunciem ou instruam as pessoas sobre o desafio / personagem Momo no YouTube. Vimos capturas de tela de vídeos e / ou miniaturas com eles [...] Essa imagem não é permitida na aplicação YouTube Kids e disponibilizamos garantias para a excluir do conteúdo no YouTube Kids.\r\nCom informações do Portal R7. ', 'O \'Desafio Momo\' envolvia roubo de informações pessoais, incitação ao suicídio e extorsão', 1, 8),
(11, 'Beber um refrigerante por dia aumenta em mais de 10% risco de cancro e morte prematura', 'default.jpg', '2019-03-21', 'Um novo estudo levado a cabo por uma equipa de investigadores da Universidade de Harvard, nos Estados Unidos, refere que os refrigerantes, como já se sabia, elevam a probabilidade de morte. No entanto, desengane-se se pensa que optar por refrigerantes sem açúcar é mais benéfico.\r\n\r\nConsumir uma coca-cola zero por dia, por exemplo, é igualmente um risco enorme para a saúde.\r\n\r\nTambém um novo estudo - publicado no na revista científica Circulation -, revela que os investigadores descobriram que quanto mais refrigerantes as pessoas bebem, maior é o risco de sofrerem uma morte prematura, sendo que por cada bebida consumida diariamente, o risco sobe em mais 10%.\r\n\r\nA mesma equipa indica que ingerir este tipo de bebidas aumenta ainda o risco de qualquer tipo cancro.', 'Consumo de refrigerantes prejudica muito a saúde', 1, 8),
(12, 'Fusão entre Disney e Fox é oficialmente concluída', 'default.jpg', '2019-03-21', 'A fusão entre Walt Disney Company e 21st Century Fox foi formalmente concluída na madrugada de hoje, dia 20. A partir de hoje, a Disney toma posse dos estúdios de TV e cinema da 21th Century Fox, além dos canais FX, FXX, National Geographic e 30% do Hulu [via The Wrap]. \r\n\r\n[Atualização: A Walt Disney Company publicou uma imagem nova em seu site oficial, com fotos de Deadpool, Avatar e The Simpson.\r\nFim da atualização]\r\n\r\nO CEO da Disney, Bob Iger, comentou o evento: \"Este é um dia histórico e extraordinário para nós, que criará um valor significativo e de longo prazo para nossa empresa e seus acionistas. Combinar a riqueza da criatividade de conteúdo da Disney com a 21th Century Fox, e seus talentos, criará uma empresa global de entretenimento, posicionada para liderar uma era dinâmica e transformadora\". \r\n\r\nO restante da Fox, já chamada Fox Corporation, inclui notícias, esportes e negócios, e canais como Fox News Channel, Fox Business Network, Fox Sports, e seus canais locais. \r\n\r\nA fusão entrega à Disney as propriedades da Marvel como X-Men, Deadpool e o Quarteto Fantástico, que passam ao controle da Marvel Studios. Outras propriedades transferidas incluem Avatar, Alien e The Simpsons.', 'A fusão entre Walt Disney Company e 21st Century Fox foi formalmente concluída', 1, 6),
(14, 'Exterminador do Futuro novo filme oficial', 'default.jpg', '2019-03-21', 'O novo filme de Exterminador do Futuro ganhou título oficial (via Deadline). O longa, que terá produção de James Cameron, se chamará Terminator: Dark Fate (Destino Sombrio em tradução livre).\r\n\r\nArnold Schwarzenegger, Linda Hamilton, Diego Boneta, Natalia Reyes, Gabriel Luna, e Mackenzie Davis estão confirmados no elenco do novo filme, que deve ainda ter novos personagens no presente e no passado - entenda. A sinopse ainda não foi divulgada.\r\n\r\nO filme tem direção de Tim Miller e produção de Cameron e David Ellison. Billy Ray assina o roteiro, baseado na história de Miller, Cameron e Ellison. Cameron já afirmou que o longa dará sequência aos eventos dos filmes de 1984 e 1991, ignorando A Rebelião das Máquinas, A Salvação e Gênesis.\r\n\r\nO filme chegará aos cinemas em 1º de novembro.', 'Terminator: Dark Fate | O exterminador do fututo: Destino sombrio', 1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(90) NOT NULL,
  `senha` varchar(14) NOT NULL,
  `nivel` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'rooter', 'root@mail.com', '001', '0'),
(6, 'vinicius', 'vinicius@mail.com', '123', '2'),
(7, 'eo', 'eo@mail.com', '111', '2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `fk_news_usuario_idx` (`usuario_id_usuario`),
  ADD KEY `fk_news_categoria1_idx` (`categoria_id_categoria`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_categoria1` FOREIGN KEY (`categoria_id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_news_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
